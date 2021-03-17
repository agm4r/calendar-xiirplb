 <!-- Semua Events -->



    <h3>Semua Events</h3>

        <table border="1">
          <thead>
            <tr>
              <th>No</th>
              <th>Acara</th>
              <th>Tanggal</th>
              <th>Jam</th>
              <th>Notes</th>
              <th>Pembuat</th>
            </tr>
          </thead>
          <tbody>

            @foreach($event as $d)

            <tr>
              <th>{{ $i++ }}</th>
              <td>{{ $d->title }}</td>
              <td>{{ date('d F Y', strtotime($d->date)) }}</td>
              <td>{{ $d->time }}</td>
              <td>{{  $d->Notes }}</td>
              <td>{{  $d->name }}</td>
            </tr>

            @endforeach

          </tbody>
        </table>
