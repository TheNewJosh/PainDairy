<table>
    <tr>
        <th>Code</th>
        <th>Pain hurt?</th>
        <th>Severity</th>
        <th>Type of Pain</th>
        <th>Duration</th>
        <th>Medications</th>
        <th>Allergy?</th>
    </tr>
    @foreach($PainRecord as $dt)
        <tr>
            <td>{{$dt->code}}</td>
            <td>{{$dt->where_hurt}}</td>
            <td>{{$dt->severity}}</td>
            <td>{{$dt->type_pain}}</td>
            <td>{{$dt->pain_lasted}}</td>
            <td>{{$dt->what_medications}}</td>
            <td>{{$dt->have_allergy}}</td>
        </tr>
    @endforeach
</table>