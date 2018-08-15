<form action="/todo" method="POST">
    {{ csrf_field() }}
    <input type="text" placeholder="請輸入東西">
    <input type="submit">
</form>