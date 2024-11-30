<?php
$flowers = [
    [
        'name' => 'Hoa dạ yến thảo',
        'description' => 'Dạ yến thảo là lựa chọn thích hợp cho những ai yêu thích trồng hoa làm đẹp nhà ở. Hoa có thể nở rực quanh năm, kể cả tiết trời se lạnh của mùa xuân hay cả những ngày nắng nóng cao điểm của mùa hè.',
        'image' => 'images/thaodayen.jpg'
    ],
    [
        'name' => 'Hoa đồng tiền',
        'description' => 'Hoa đồng tiền thích hợp để trồng trong mùa xuân và đầu mùa hè, khi mà cường độ ánh sáng chưa quá mạnh. Hoa đồng tiền tượng trưng cho sự sung túc, tình yêu và hạnh phúc viên mãn.',
        'image' => 'images/_ong_tien.jpg'
    ],
    [
        'name' => 'Hoa giấy',
        'description' => 'Hoa giấy có mặt ở hầu khắp mọi nơi trên đất nước ta. Hoa giấy mỏng manh nhưng rất lâu tàn, với nhiều màu như trắng, xanh, đỏ, hồng, tím, vàng… cùng nhiều sắc độ khác nhau.',
        'image' => 'images/_giay.jpg'
    ],
    [
        'name' => 'Hoa thanh tú',
        'description' => 'Mang dáng hình tao nhã, màu sắc thiên thanh dịu dàng của hoa thanh tú có thể khiến bạn cảm thấy vô cùng nhẹ nhàng khi nhìn ngắm.',
        'image' => 'images/_thanh_tu.jpg'
    ],
    [
        'name' => 'Hoa đèn lồng',
        'description' => 'Hoa đèn lồng có vẻ đẹp giống như chiếc đèn lồng đỏ trên cao. Hoa trồng trong chậu treo, bồn, phên dậu và cho hoa quanh năm.',
        'image' => 'images/_en_long.jpg'
    ],
    [
        'name' => 'Hoa cẩm chướng',
        'description' => 'Hoa cẩm chướng là loại hoa thích hợp trồng vào dịp xuân - hè. Hoa có nhiều màu sắc như hồng, vàng, đỏ, tím, thậm chí pha lẫn màu để tạo nên đường viền xinh xắn.',
        'image' => 'images/_cam_chuong.jpg'
    ],
    [
        'name' => 'Hoa huỳnh anh',
        'description' => 'Hoa huỳnh anh có màu vàng rực, hình dạng như chiếc kèn be bé xinh xắn. Đây là lựa chọn tuyệt vời để tô điểm ban công hoặc hàng rào nhà bạn.',
        'image' => 'images/_huynh_anh.jpg'
    ],
    [
        'name' => 'Hoa Păng-xê',
        'description' => 'Hoa Păng-xê, hay còn gọi là hoa bướm, có cánh mỏng mượt như nhung. Hoa được trồng trong chậu nhỏ, hình dạng cánh bướm mềm mại.',
        'image' => 'images/pang_xe.jpg'
    ],
    [
        'name' => 'Hoa sen',
        'description' => 'Hoa sen tượng trưng cho vẻ đẹp trắng trong, tao nhã. Hoa có thể được trồng trong ao hoặc chậu trang trí đều đẹp.',
        'image' => 'images/_sen.jpg'
    ],
    [
        'name' => 'Hoa dừa cạn',
        'description' => 'Hoa dừa cạn nở không ngừng từ mùa xuân sang mùa hè cho đến tận mùa thu. Loài hoa này tượng trưng cho sự thành đạt và có khả năng trừ tà.',
        'image' => 'images/_dua_can.jpg'
    ],
    [
        'name' => 'Hoa sử quân tử',
        'description' => 'Hoa sử quân tử là cây leo với những chùm hoa nhỏ xinh, màu hồng pha trắng hoặc đỏ tươi, có mùi hương nồng đượm.',
        'image' => 'images/su_quan_tu.jpg'
    ],
    [
        'name' => 'Cúc lá nho',
        'description' => 'Cúc lá nho có những bông hoa nhiều màu sắc phong phú, tươi sáng và lá to với hình dáng răng cưa độc đáo.',
        'image' => 'images/cuc_la_nho.jpg'
    ],
    [
        'name' => 'Cẩm tú cầu',
        'description' => 'Cẩm tú cầu có hoa nở to thành từng chùm. Hoa có nhiều màu sắc như trắng, tím, hồng, xanh rất nhẹ nhàng.',
        'image' => 'images/cam_tu_cau.jpg'
    ],
    [
        'name' => 'Hoa cúc dại',
        'description' => 'Hoa cúc dại có sức sống bền bỉ, chịu được nhiệt độ cao. Hoa có màu trắng, hồng tươi sáng hay vàng cam nổi bật.',
        'image' => 'images/cuc_dai.jpg'
    ]
];
function displayFlowers($flowers)
{
    foreach ($flowers as $flower) {
        echo "
        <div class='flower'>
            <img src='images/{$flower['image']}' alt='{$flower['name']}' />
            <h3>{$flower['name']}</h3>
            <p>{$flower['description']}</p>
        </div>
        ";
    }
}
?>
