<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                type: 'GET',
                url: 'http://localhost/api-example/customer.php',
               //url: 'https://osvnews.com/wp-json/wp/v2/posts'',
                success: function (data) {
                    data.forEach(customer => {

                        $('#main_list').append("<tr>"
                            + "<th scope=\"row\">" + customer.customer_name + "</th>"
                            + "<td>" + customer.address + "</td>"
                            + "<td>" + customer.birthday + "</td>"
                            + "<td>" + customer.email + "</td>"
                            + "<td>" + customer.phone + "</td>"
                            + "</tr>")
                        
                    });
                }
            });
            return false;
        });
    </script>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                </tr>
            </thead>
            <tbody id="main_list">

            </tbody>
        </table>
    </div> 
</body> 
</html>