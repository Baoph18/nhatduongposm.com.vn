<?php
if (!defined('SOURCES')) die("Error");

/* Query allpage */
$favicon = $cache->get("select photo from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('favicon', 'photo_static'), 'fetch', 7200);
$logo = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('logo', 'photo_static'), 'fetch', 7200);
$social = $cache->get("select photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('social'), 'result', 7200);
$gioithieu = $cache->get("select name$lang, desc$lang, photo, photo2, content$lang from #_static where type = ? limit 0,1", array('gioi-thieu'), 'fetch', 7200);
$bvgioithieu = $cache->get("select name$lang,desc$lang,photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('gioithieu'), 'result', 7200);
$splistmenu = $cache->get("select name$lang, slugvi, slugen, id,photo from #_product_list where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'), 'result', 7200);
$dichvu = $cache->get("select name$lang,desc$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('dich-vu'), 'result', 7200);

$faq = $cache->get("select name$lang,desc$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('faq'), 'result', 7200);

$tuvan = $cache->get("select name$lang,desc$lang,options,photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('tuvan'), 'result', 7200);

$trangtb = $cache->get("select name$lang, desc$lang, photo, photo2, content$lang from #_static where type = ? limit 0,1", array('trang-tb'), 'fetch', 7200);
$bvtrangtb = $cache->get("select name$lang,desc$lang,photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('bvtrangtb'), 'result', 7200);
$baogia = $cache->get("select name$lang,desc$lang,photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('baogia'), 'result', 7200);




//footer
$footer = $cache->get("select name$lang, content$lang, photo from #_static where type = ? limit 0,1", array('footer'), 'fetch', 7200);
$slogan = $cache->get("select content$lang, photo from #_static where type = ? limit 0,1", array('slogan'), 'fetch', 7200);
$huongdan = $cache->get("select name$lang,desc$lang,options,photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('huong-dan'), 'result', 7200);
$chinhsach = $cache->get("select name$lang,desc$lang,options,photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('chinh-sach'), 'result', 7200);
$dslienhe = $cache->get("select name$lang,desc$lang,options,photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('dslienhe'), 'result', 7200);



$thuonghieu = $cache->get("select name$lang, link, photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb, id desc", array('thuonghieu'), 'result', 7200);
$kinhdoanh = $cache->get("select name$lang,desc$lang,options,photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('kinhdoanh'), 'result', 7200);
$hoatdong = $cache->get("select photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 4", array('hoatdong'), 'result', 7200);
$bvhoatdong = $cache->get("select name$lang, desc$lang, content$lang from #_static where type = ? limit 0,1", array('hoat-dong'), 'fetch', 7200);

if($source == 'index'){
    $slider = $cache->get("select name$lang, photo, link,desc$lang,content$lang, link_video,photo2 from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('slide'), 'result', 7200);
} else {
    $slider = $cache->get("select name$lang, photo, link,desc$lang,content$lang from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array(''.$com.''), 'result', 7200);

}
$bannersp = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('bannersp'), 'result', 7200);


$whychoose = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('whychoose'), 'result', 7200);
$destinationnb = $cache->get("select name$lang, desc$lang, photo,date_created,slugvi, slugen from #_news where type = ? and find_in_set('hienthi',status) and find_in_set('noibat',status) order by numb,id desc", array('destination'), 'result', 7200);
$destination = $cache->get("select name$lang, desc$lang, photo,date_created,slugvi, slugen from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('destination'), 'result', 7200);
$motorcycle = $cache->get("select name$lang, desc$lang, photo,date_created,slugvi, slugen from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('motorcycle'), 'result', 7200);

$sliderabout = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('sliderabout'), 'result', 7200);
$selecttour = $cache->get("select name$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('tour'), 'result', 7200);
$customer = $cache->get("select name$lang, desc$lang, photo,date_created,slugvi, slugen,content$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 10", array('customer'), 'result', 7200);
$whychoose2 = $cache->get("select name$lang, desc$lang, photo,date_created,slugvi, slugen,content$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 10", array('whychoose2'), 'result', 7200);

$visao = $cache->get("select name$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('visao'), 'result', 7200);
$bvtour = $cache->get("select name$lang from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('bvtour'), 'result', 7200);




/* Get statistic */
$counter = $statistic->getCounter();
$online = $statistic->getOnline();

/* Newsletter */
if (!empty($_POST['submit-tuvan'])) {
    $responseCaptcha = $_POST['recaptcha_response_newsletter'];
    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
    $scoreCaptcha = (!empty($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
    $actionCaptcha = (!empty($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
    $testCaptcha = (!empty($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;
    $dataTuvan = (!empty($_POST['dataTuvan'])) ? $_POST['dataTuvan'] : null;

    /* Valid data */
    if (empty($dataTuvan['email'])) {
        $flash->set('error', 'Email không được trống');
    }

    if (!empty($dataTuvan['email']) && !$func->isEmail($dataTuvan['email'])) {
        $flash->set('error', 'Email không hợp lệ');
    }

    $error = $flash->get('error');

    if (!empty($error)) {
        $func->transfer($error, $configBase, false);
    }

    /* Save data */
    if (empty($_POST['check_spam_tuvan'])) {
        $data = array();
        $data['email'] = htmlspecialchars($dataTuvan['email']);
        $data['tieude'] = htmlspecialchars($dataTuvan['tieude']);
        $data['content'] = htmlspecialchars($dataTuvan['content']);
        $data['date_created'] = time();
        $data['type'] = 'dangkytuvan';

        if ($d->insert('newsletter', $data)) {
            $func->transfer("Đăng ký nhận tin thành công. Chúng tôi sẽ liên hệ với bạn sớm.", $configBase);
        } else {
            $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
        }
    } else {
        $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
    }
}


/* Newsletter */
if (!empty($_POST['submit-newsletter'])) {
    $responseCaptcha = $_POST['recaptcha_response_newsletter'];
    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
    $scoreCaptcha = (!empty($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
    $actionCaptcha = (!empty($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
    $testCaptcha = (!empty($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;
    $dataNewsletter = (!empty($_POST['dataNewsletter'])) ? $_POST['dataNewsletter'] : null;

    /* Valid data */
    if (empty($dataNewsletter['email'])) {
        $flash->set('error', 'Email không được trống');
    }

    if (!empty($dataNewsletter['email']) && !$func->isEmail($dataNewsletter['email'])) {
        $flash->set('error', 'Email không hợp lệ');
    }

    $error = $flash->get('error');

    if (!empty($error)) {
        $func->transfer($error, $configBase, false);
    }

    /* Save data */
    if (empty($_POST['check_spam_newsletter'])) {
        $data = array();
        $data['email'] = htmlspecialchars($dataNewsletter['email']);
        $data['date_created'] = time();
        $data['type'] = 'dangkynhantin';

        if ($d->insert('newsletter', $data)) {
            $func->transfer("Đăng ký nhận tin thành công. Chúng tôi sẽ liên hệ với bạn sớm.", $configBase);
        } else {
            $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
        }
    } else {
        $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
    }
}


if (!empty($_POST['submit-tour'])) {
    $responseCaptcha = $_POST['recaptcha_response_newsletter'];
    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
    $scoreCaptcha = (!empty($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
    $actionCaptcha = (!empty($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
    $testCaptcha = (!empty($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;
    $dataTour = (!empty($_POST['dataTour'])) ? $_POST['dataTour'] : null;

    /* Valid data */
    if (empty($dataTour['email'])) {
        $flash->set('error', 'Email không được trống');
    }

    if (!empty($dataTour['email']) && !$func->isEmail($dataTour['email'])) {
        $flash->set('error', 'Email không hợp lệ');
    }

    $error = $flash->get('error');

    if (!empty($error)) {
        $func->transfer($error, $configBase, false);
    }

    /* Save data */
    if (empty($_POST['check_spam_tour'])) {
        $data = array();
        $data['email'] = htmlspecialchars($dataTour['email']);
        $data['fullname'] = htmlspecialchars($dataTour['fullname']);
        $data['phone'] = htmlspecialchars($dataTour['phone']);
        $data['subject'] = htmlspecialchars($dataTour['tour']);
        $data['date_created'] = time();
        $data['type'] = 'dangkytour';

        if ($d->insert('newsletter', $data)) {
            $func->transfer("Đăng ký tour thành công. Chúng tôi sẽ liên hệ với bạn sớm.", $configBase);
        } else {
            $func->transfer("Đăng ký tour thất bại. Vui lòng thử lại sau.", $configBase, false);
        }
        /* Gán giá trị gửi email */
        $strThongtin = '';
        $emailer->set('tennguoigui', $data['fullname']);
        $emailer->set('emailnguoigui', $data['email']);
        $emailer->set('dienthoainguoigui', $data['phone']);
        $emailer->set('tieudelienhe', $data['subject']);
        if ($emailer->get('tennguoigui')) {
            $strThongtin .= '<span style="text-transform:capitalize">' . $emailer->get('tennguoigui') . '</span><br>';
        }
        if ($emailer->get('emailnguoigui')) {
            $strThongtin .= '<a href="mailto:' . $emailer->get('emailnguoigui') . '" target="_blank">' . $emailer->get('emailnguoigui') . '</a><br>';
        }
        $emailer->set('thongtin', $strThongtin);

        /* Defaults attributes email */
        $emailDefaultAttrs = $emailer->defaultAttrs();

        /* Variables email */
        $emailVars = array(
            '{emailTitleSender}',
            '{emailInfoSender}',
            '{emailSubjectSender}',
            '{emailContentSender}'
        );
        $emailVars = $emailer->addAttrs($emailVars, $emailDefaultAttrs['vars']);

        /* Values email */
        $emailVals = array(
            $emailer->get('tennguoigui'),
            $emailer->get('thongtin'),
            $emailer->get('tieudelienhe'),
            $emailer->get('noidunglienhe')
        );
        $emailVals = $emailer->addAttrs($emailVals, $emailDefaultAttrs['vals']);

        /* Send email admin */
        $arrayEmail = null;
        $subject = "Thư liên hệ từ " . $setting['name' . $lang];
        $message = str_replace($emailVars, $emailVals, $emailer->markdown('contact/admin'));
        $file = 'file_attach';

        if ($emailer->send("admin", $arrayEmail, $subject, $message, $file)) {
            /* Send email customer */
            $arrayEmail = array(
                "dataEmail" => array(
                    "name" => $emailer->get('tennguoigui'),
                    "email" => $emailer->get('emailnguoigui')
                )
            );
            $subject = "Thư liên hệ từ " . $setting['name' . $lang];
            $message = str_replace($emailVars, $emailVals, $emailer->markdown('contact/customer'));
            $file = 'file_attach';

            if ($emailer->send("customer", $arrayEmail, $subject, $message, $file)) $func->transfer("Đăng ký tour thành công", $configBase);
        } else $func->transfer("Đăng ký tour thất bại. Vui lòng thử lại sau", $configBase, false);
    } else {
        $func->transfer("Đăng ký tour thất bại. Vui lòng thử lại sau.", $configBase, false);
    }
}
