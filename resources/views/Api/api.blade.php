<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-left: 15%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 12px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.w-5{
    display: none;
}
</style>
</head>
<body>


    <table id="customers">



    <tr>
            <th>userId</th>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>

    </tr>
    @foreach ($response as $list)

        <tr>
                <td>{{ $list->userId }}</td>
                <td>{{ $list->id }}</td>
                <td>{{ $list->title }}</td>
                <td>{{ $list->body}}</td>


        </tr>
    @endforeach

    </table>

</body>
</html>
