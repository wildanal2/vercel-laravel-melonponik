const sheetENV = SpreadsheetApp.getActiveSpreadsheet().getSheetByName("Dashboard");

/** =====================================================
 * Entry point: routing ke endpoint sesuai parameter
 * Gunakan ?endpoint=dashboard atau ?endpoint=landing
 * ===================================================== */
function doGet(e) {
  const endpoint = e.parameter.endpoint;

  if (endpoint === 'dashboard') {
    return getDashboardData();
  } else if (endpoint === 'landing') {
    return getLandingData();
  } else {
    return ContentService
      .createTextOutput(JSON.stringify({ error: "Endpoint tidak ditemukan. Gunakan ?endpoint=dashboard atau ?endpoint=landing" }))
      .setMimeType(ContentService.MimeType.JSON);
  }
}

/** =====================================================
 * Fungsi Dashboard (Code.gs)
 * Struktur dan format tetap sama
 * ===================================================== */
function getDashboardData() {
  const ss = SpreadsheetApp.getActiveSpreadsheet();
  const sheet = ss.getSheetByName("Dashboard"); // ganti sesuai nama sheet

  // === Bagian 1: Sensor utama (A2:C7) ===
  const sensorRange = sheet.getRange("A2:C7").getValues();

  function toSnakeCase(str) {
    return str
      .toLowerCase()
      .replace(/\s+/g, '_')
      .replace(/[^a-z0-9_]/g, '');
  }

  const sensorData = {};
  sensorRange.forEach(row => {
    const key = toSnakeCase(row[0]);
    let value = row[2];
    if (!isNaN(value)) value = Number(value);
    sensorData[key] = value;
  });

  // === Bagian 2: Grafik Suhu (A12:B31) ===
  const tempRange = sheet.getRange("A12:B31").getValues();
  const tempLabels = [];
  const tempData = [];

  tempRange.forEach(row => {
    if (row[0] && row[1] !== '') {
      tempLabels.push(String(row[0]));
      tempData.push(Number(row[1]));
    }
  });

  const temperatureChartData = {
    labels: tempLabels,
    data: tempData
  };

  // === Bagian 3: Grafik TDS (E12:F21) ===
  const tdsRange = sheet.getRange("E12:F21").getValues();
  const tdsLabels = [];
  const tdsData = [];

  tdsRange.forEach(row => {
    if (row[0] && row[1] !== '') {
      tdsLabels.push(String(row[0]));
      tdsData.push(Number(row[1]));
    }
  });

  const tdsChartData = {
    labels: tdsLabels,
    data: tdsData
  };

  // === Bagian 4: Data Penanaman (H12:N40) ===
  const plantingRange = sheet.getRange("H12:N40").getValues();

  const plantingData = plantingRange
    .filter(row => row[0])
    .map(row => ({
      jenis_melon: row[0],
      greenhouse: row[1],
      populasi_tanaman: row[2],
      usia_hst: row[3],
      start_date: row[4],
      end_date: row[5],
      berat_panen: row[6],
    }));

  // === Gabungkan semua hasil ===
  const result = {
    sensorData: sensorData,
    temperatureChartData: temperatureChartData,
    tdsChartData: tdsChartData,
    plantingData: plantingData
  };

  // === Return JSON response ===
  return ContentService
    .createTextOutput(JSON.stringify(result))
    .setMimeType(ContentService.MimeType.JSON);
}

/** =====================================================
 * Fungsi Landing Page (Landing.gs)
 * Struktur dan format tetap sama
 * ===================================================== */
function getLandingData() {
  const ss = SpreadsheetApp.getActiveSpreadsheet();
  const sheet = ss.getSheetByName("LANDING PAGE");

  /** =====================================================
   *  BAGIAN 1 — ABOUT (cell B39)
   * ===================================================== */
  const about = sheet.getRange("B39").getValue();

  /** =====================================================
   *  BAGIAN 2 — KATALOG (A4:F16)
   * ===================================================== */
  const katalogRange = sheet.getRange("A4:F16").getValues();

  const katalog = katalogRange
    .filter(row => row[1])
    .map(row => ({
      product_type: row[0] || "",
      nama: row[1] || "",
      deskripsi: row[2] || "",
      harga: row[3] ? String(row[3]) : "",
      "wa-url": row[4] || "",
      "img-url": row[5] || ""
    }));

  /** =====================================================
   *  BAGIAN 3 — TESTIMONI (A21:E35)
   * ===================================================== */
  const testiRange = sheet.getRange("A21:E35").getValues();

  const testimoni = testiRange
    .filter(row => row[0])
    .map(row => ({
      nama: row[0] || "",
      title: row[1] || "",
      deskripsi: row[2] || "",
      "img-url": row[4] || ""
    }));

  /** =====================================================
   * OUTPUT JSON
   * ===================================================== */
  const result = {
    about: about,
    katalog: katalog,
    testimoni: testimoni
  };

  return ContentService
    .createTextOutput(JSON.stringify(result, null, 2))
    .setMimeType(ContentService.MimeType.JSON);
}
