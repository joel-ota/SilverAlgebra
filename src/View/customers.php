<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $viewData['title'] ?></title>
</head>
<body>
    <h1><?= $viewData['title'] ?></h1>
    <table>
        <tr>
            <th style="padding-right: 100px;">ID</th>
            <th style="padding-right: 100px;">Name</th>
            <th style="padding-right: 100px;">LastName</th>
            <th style="padding-right: 100px;">Phone</th>
            <th style="padding-right: 100px;">Address</th>
            <th style="padding-right: 100px;">City</th>
            <th style="padding-right: 100px;">State</th>
        </tr>
        <?php foreach ($viewData['data'] as $customer) { ?>
            <tr>
                <td><?= $customer->customerNumber ?></td>
                <td><?= $customer->customerName ?></td>
                <td><?= $customer->contactLastName ?></td>
                <td><?= $customer->phone ?></td>
                <td><?= $customer->addressLine1 ?></td>
                <td><?= $customer->city ?></td>
                <td><?= $customer->state ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

