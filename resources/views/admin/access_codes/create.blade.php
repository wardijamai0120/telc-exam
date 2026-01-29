<form method="POST" action="/admin/access-codes">
    @csrf

    <label>Valid for (days)</label><br>
    <input type="number" name="days" required><br><br>

    <label>Code Type</label><br>
    <select name="type" required>
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select><br><br>

    <button type="submit">Create</button>
</form>
