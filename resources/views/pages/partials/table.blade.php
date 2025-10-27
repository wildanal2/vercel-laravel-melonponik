<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Periode Jenis Tanam Melon
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Jenis Melon</th>
                    <th>Greenhouse</th>
                    <th>Usia HST</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Berat Panen</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Jenis Melon</th>
                    <th>Greenhouse</th>
                    <th>Usia HST</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Berat Panen</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($plantingData as $data)
                <tr>
                    <td>{{ $data['jenis_melon'] }}</td>
                    <td>{{ $data['greenhouse'] }}</td>
                    <td>{{ $data['usia_hst'] }}</td>
                    <td>{{ $data['start_date'] }}</td>
                    <td>{{ $data['end_date'] }}</td>
                    <td>{{ $data['berat_panen'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
