<table>
    @foreach ($cars as $car)
        <tr>
            @foreach ($car as $field)
                <td>{{ $field }}</td>
            @endforeach
        </tr>
    @endforeach
</table>