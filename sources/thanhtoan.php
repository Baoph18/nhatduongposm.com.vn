<?php
if (!defined('SOURCES')) die("Error");

/* SEO */
$seo->set('title', $titleMain);

/* breadCrumbs */
if (!empty($titleMain)) $breadcr->set($com, $titleMain);
$breadcrumbs = $breadcr->get();


if (!empty($_POST['thanhtoan'])) {


    /* Valid data */
    $dataRoom = (!empty($_POST['dataRoom'])) ? $_POST['dataRoom'] : null;

    $code = strtoupper($func->stringRandom(6));
    $rs_room = $d->rawQueryOne("select name$lang,content$lang, photo, options, discount, sale_price, regular_price from #_product where type = ? and id = ? and find_in_set('hienthi',status) limit 0,1", array('san-pham',$_POST['dataRoom']['loaiphong']));

    $data = array();
    $data['code'] = $code;
    $data['fullname'] = htmlspecialchars($dataRoom['fullname']);
    $data['email'] = htmlspecialchars($dataRoom['email']);
    $data['phone'] = htmlspecialchars($dataRoom['phone']);
    $data['content'] = htmlspecialchars($dataRoom['content']);
    $data['checkin'] = htmlspecialchars($dataRoom['checkin']);
    $data['checkout'] = htmlspecialchars($dataRoom['checkout']);
    $data['loaiphong'] = htmlspecialchars($dataRoom['loaiphong']);
    $data['sokhach'] = htmlspecialchars($dataRoom['sokhach']);
    $data['sodem'] = htmlspecialchars($dataRoom['sodem']);
    $data['total_price'] = htmlspecialchars($dataRoom['total_price']);
    $data['total_price2'] = htmlspecialchars($dataRoom['total_price2']);
    $data['order_status'] = 1;

    $data['date_created'] = time();
    $data['numb'] = 1;
    // var_dump($data);die('x');
    if ($d->insert('order', $data)) {
        $id_insert = $d->getLastInsertId();
    } else {
        $func->transfer("Gửi yêu cầu đặt phòng thất bại. Vui lòng thử lại sau.", $configBase, false);
    }

    /* Gán giá trị gửi email */
    $strThongtin = '';
    $emailer->set('tennguoigui', $data['fullname']);
    $emailer->set('emailnguoigui', $data['email']);
    $emailer->set('dienthoainguoigui', $data['phone']);
    $emailer->set('noidunglienhe', $data['content']);
    $emailer->set('tieudelienhe', $data['loaiphong']);
    $emailer->set('checkinlienhe', $data['checkin']);
    $emailer->set('checkoutlienhe', $data['checkout']);
    $emailer->set('sodemlienhe', $data['sodem']);
    $emailer->set('sokhachlienhe', $data['sokhach']);
    $emailer->set('total_price2lienhe', $data['total_price2']);
    if ($emailer->get('tennguoigui')) {
        $strThongtin .= '<span style="text-transform:capitalize">Tên: ' . $emailer->get('tennguoigui') . '</span><br>';
    }
    if ($emailer->get('emailnguoigui')) {
        $strThongtin .= 'Email: <a href="mailto:' . $emailer->get('emailnguoigui') . '" target="_blank">' . $emailer->get('emailnguoigui') . '</a><br>';
    }
    if ($emailer->get('dienthoainguoigui')) {
        $strThongtin .= 'Điện thoại: ' . $emailer->get('dienthoainguoigui') . '';
    }
    if ($emailer->get('checkinlienhe')) {
        $strThongtin .= 'Nhận phòng: ' . $emailer->get('checkinlienhe') . '';
    }
    if ($emailer->get('checkoutlienhe')) {
        $strThongtin .= 'Trả phòng: ' . $emailer->get('checkoutlienhe') . '';
    }
    if ($emailer->get('sodemlienhe')) {
        $strThongtin .= 'Số đêm: ' . $emailer->get('sodemlienhe') . '';
    }
    if ($emailer->get('sokhachlienhe')) {
        $strThongtin .= 'Số khách: ' . $emailer->get('sokhachlienhe') . '';
    }

    $emailer->set('thongtin', $strThongtin);

    /* Defaults attributes email */
    $emailDefaultAttrs = $emailer->defaultAttrs();

    /* Variables email */
    $emailVars = array(
        '{emailTitleSender}',
        '{emailInfoSender}',
        '{emailSubjectSender}',
        '{emailTongSender}',
        '{emailContentSender}'
    );
    $emailVars = $emailer->addAttrs($emailVars, $emailDefaultAttrs['vars']);

    /* Values email */
    $emailVals = array(
        $emailer->get('tennguoigui'),
        $emailer->get('thongtin'),
        $emailer->get('tieudelienhe'),
        $emailer->get('total_price2lienhe'),
        $emailer->get('noidunglienhe')
    );
    $emailVals = $emailer->addAttrs($emailVals, $emailDefaultAttrs['vals']);

    /* Send email admin */
    $arrayEmail = null;
    $subject = "Thư yêu cầu đặt phòng từ " . $setting['name' . $lang];
    $message = str_replace($emailVars, $emailVals, $emailer->markdown('room/admin'));


    if ($emailer->send("admin", $arrayEmail, $subject, $message)) {
        /* Send email customer */
        $arrayEmail = array(
            "dataEmail" => array(
                "name" => $emailer->get('tennguoigui'),
                "email" => $emailer->get('emailnguoigui')
            )
        );
        $subject = "Thư yêu cầu đặt phòng từ " . $setting['name' . $lang];
        $message = str_replace($emailVars, $emailVals, $emailer->markdown('room/customer'));

       if ($emailer->send("customer", $arrayEmail, $subject, $message)) $func->transfer("Gửi yêu cầu đặt phòng thành công", $configBase);die('x');
    } else $func->transfer("Gửi yêu cầu đặt phòng thất bại. Vui lòng thử lại sau", $configBase, false);
} else {
    $func->transfer("Gửi yêu cầu đặt phòng thất bại. Vui lòng thử lại sau", $configBase, false);
}