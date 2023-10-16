<form action="/generate-summon" method="post">
    @csrf
    <label for="recipient_name">Recipient's Name:</label>
    <input type="text" name="recipient_name">
    
    <label for="reason">Reason for Summon:</label>
    <textarea name="reason" rows="4" cols="50"></textarea>

    <!-- Add more input fields as needed -->

    <button type="submit">Generate Summon Letter</button>
</form>