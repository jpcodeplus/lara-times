<div>
<form wire:submit.prevent="addOpeningTime">
    <input type="time" wire:model="newOpenTime">
    <input type="time" wire:model="newCloseTime">
    <select wire:model="newDay">
        <option value="Monday">Montag</option>
        <option value="Tuesday">Dienstag</option>
        <!-- weitere Tage -->
    </select>
    <button type="submit">Hinzufügen</button>
</form>


<table>
    <tr>
        <th>Tag</th>
        <th>Öffnet um</th>
        <th>Schließt um</th>
        <th>Aktionen</th>
    </tr>
    @foreach ($openingTimes as $time)
    <tr>
        <td>{{ $time->day }}</td>
        <td>{{ $time->open_time }}</td>
        <td>{{ $time->close_time }}</td>
        <td>
            <button wire:click="editOpeningTime({{ $time->id }})">Bearbeiten</button>
            <button wire:click="deleteOpeningTime({{ $time->id }})">Löschen</button>
        </td>
    </tr>
    @endforeach
</table>
</div>