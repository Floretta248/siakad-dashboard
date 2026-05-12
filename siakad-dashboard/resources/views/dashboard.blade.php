<!DOCTYPE html>
<html>
<head>
    <title>Dashboard SIAKAD</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <h1>Dashboard SIAKAD</h1>

    <canvas id="prodiChart"></canvas>

    <script>

        new Chart(document.getElementById('prodiChart'), {
            type: 'bar',
            data: {
                labels: {!! json_encode($prodi->pluck('prodi')) !!},
                datasets: [{
                    label: 'Jumlah Mahasiswa per Prodi',
                    data: {!! json_encode($prodi->pluck('total')) !!},
                    borderWidth: 1
                }]
            }
        });

    </script>

</body>
</html>