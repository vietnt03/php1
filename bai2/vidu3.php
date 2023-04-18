<?php
$students = [
    [
        'mssv' => 'ph12345',
        'hoten' => 'Nguyễn Văn Anh',
        'email' => 'anhnv@fpt.edu.vn'
    ],
    [
        'mssv' => 'ph12346',
        'hoten' => 'Lê đình Mạnh',
        'email' => 'manhld@fpt.edu.vn'
    ],
    [
        'mssv' => 'ph12347',
        'hoten' => 'Trịnh Lan Anh',
        'email' => 'anhtl@fpt.edu.vn'
    ]
];

echo "<table border='1'>";
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student['mssv'] . "</td>";
    echo "<td>" . $student['hoten'] . "</td>";
    echo "<td>" . $student['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>

<table border="1">
    <tr>
        <th>MSSV</th>
        <th>Họ tên</th>
        <th>Email</th>
    </tr>
    <?php foreach ($students as $student) : ?>
        <tr>
            <td><?= $student['mssv'] ?></td>
            <td><?= $student['hoten'] ?></td>
            <td><?= $student['email'] ?></td>
        </tr>
    <?php endforeach ?>
</table>