$(document).ready(function() {

    $('#personas').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'https://datatables.yajrabox.com/eloquent/basic-data',
                columns : [
                    {data: 'nombres'},
                    {data: 'apellidos'},
                    {data: 'edad'},
                ]
            });
});

