<div class="tab pb-0 pb-sm-2 row mx-1">
    <button class="col-6 col-md-auto tablinks active" onclick="openCategory(event, 'promobox')">Home</button>
    <button class="col-6 col-md-auto tablinks" onclick="openCategory(event, 'app')">/app</button>
    <button class="col-6 col-md-auto tablinks" onclick="openCategory(event, 'business')">/business</button>
    <button class="col-6 col-md-auto tablinks" onclick="openCategory(event, 'start')">/start</button>
    <button class="col-6 col-md-auto tablinks" onclick="openCategory(event, 'promo')">/promo</button>
    <button class="col-6 col-md-auto tablinks" onclick="openCategory(event, 'banner')">Banner</button>
</div>

<div id="promobox" class="tabcontent">
    <form action="promobox.php" method="post">
        <div class="form-group">
            <label for="heading0">Heading</label>
            <textarea class="form-control" id="heading0" name="heading" rows="2" required><?php echo $heading[0]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="content0">Content</label>
            <textarea class="form-control" id="content0" name="content" rows="2" required><?php echo $content[0]; ?></textarea>
            <small class="form-text text-muted">HTML is allowed.</small>
        </div>
        <div class="row">
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="btn0">Button</label>
                <textarea class="form-control" id="btn0" name="btn" rows="1" required><?php echo $btn[0]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="heading0">Final date</label>
                <textarea class="form-control" id="date0" name="date" rows="1" required><?php echo $date[0]; ?></textarea>
                <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
            </div>
            <div class="form-group col-sm-6">
                <label for="btnlink0">Button link</label>
                <textarea class="form-control" id="btnlink0" name="btnlink" rows="1" required><?php echo $btnlink[0]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="btncolor0">Button color</label>
                <textarea class="form-control" id="btncolor0" name="btncolor" rows="1" required><?php echo $btncolor[0]; ?></textarea>
            </div>
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable0" value="block" <?php if ($status[0]=='block' ){ echo 'checked' ; } ?>

                        >
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable0" value="none" <?php if ($status[0]=='none' ){ echo 'checked' ; } ?>
                        >
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group col-sm-6">
                <legend>Date counter is:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterenable0" value="block" <?php if ($counterstatus[0]=='block' ){ echo 'checked' ; } ?>>
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable0" value="none" <?php if ($counterstatus[0]=='none' ){ echo 'checked' ; } ?>>
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="d-none">
                <input type="radio" class="form-check-input" name="id" id="id0" value="1" checked>
            </fieldset>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div id="app" class="tabcontent">
    <form action="promobox.php" method="post">
        <div class="form-group">
            <label for="heading1">Heading</label>
            <textarea class="form-control" id="heading1" name="heading" rows="2" required><?php echo $heading[1]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="content1">Content</label>
            <textarea class="form-control" id="content1" name="content" rows="2" required><?php echo $content[1]; ?></textarea>
            <small class="form-text text-muted">HTML is allowed.</small>
        </div>
        <div class="row">
            <div class="form-group col-sm-6 mb-3 mb-md-0 d-none">
                <label for="btn1">Button</label>
                <textarea class="form-control" id="btn1" name="btn" rows="1" required disabled><?php echo $btn[1]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="btncolor1">Button color</label>
                <textarea class="form-control" id="btncolor1" name="btncolor" rows="1" required><?php echo $btncolor[1]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="date1">Final date</label>
                <textarea class="form-control" id="date1" name="date" rows="1" required><?php echo $date[1]; ?></textarea>
                <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
            </div>
            <div class="form-group col-12 mb-3 mb-md-0">
                    <label for="imglink1">Image link</label>
                    <textarea class="form-control" id="imglink1" name="imglink" rows="1"><?php echo $imglink[1]; ?></textarea>
                    <small class="form-text text-muted">If you don't want to use image, leave empty</small>
                </div>
            <div class="form-group col-12 d-none">
                <label for="btnlink1">Button link</label>
                <textarea class="form-control" id="btnlink1" name="btnlink" rows="1" required disabled><?php echo $btnlink[1]; ?></textarea>
            </div>
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable1" value="block" <?php if ($status[1]=='block' ){ echo 'checked' ; } ?>

                        >
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable1" value="none" <?php if ($status[1]=='none' ){ echo 'checked' ; } ?>
                        >
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group col-sm-6">
                <legend>Date counter is:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterenable1" value="block" <?php if ($counterstatus[1]=='block' ){ echo 'checked' ; } ?>>
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable1" value="none" <?php if ($counterstatus[1]=='none' ){ echo 'checked' ; } ?>>
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="d-none">
                <input type="radio" class="form-check-input" name="id" id="id1" value="2" checked>
            </fieldset>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div id="business" class="tabcontent">
    <form action="promobox.php" method="post">
        <div class="form-group">
            <label for="heading">Heading</label>
            <textarea class="form-control" id="heading" name="heading" rows="2" required><?php echo $heading[2]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="2" required><?php echo $content[2]; ?></textarea>
            <small class="form-text text-muted">HTML is allowed.</small>
        </div>
        <div class="row">
            <div class="form-group col-sm-6 mb-3 mb-md-0 d-none">
                <label for="btn">Button</label>
                <textarea class="form-control" id="btn" name="btn" rows="1" required disabled><?php echo $btn[2]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="btncolor2">Button color</label>
                <textarea class="form-control" id="btncolor2" name="btncolor" rows="1" required><?php echo $btncolor[2]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="date2">Final date</label>
                <textarea class="form-control" id="date2" name="date" rows="1" required><?php echo $date[2]; ?></textarea>
                <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
            </div>
            <div class="form-group col-12 mb-3 mb-md-0">
                    <label for="imglink2">Image link</label>
                    <textarea class="form-control" id="imglink2" name="imglink" rows="1"><?php echo $imglink[2]; ?></textarea>
                    <small class="form-text text-muted">If you don't want to use image, leave empty</small>
                </div>
            <div class="form-group col-12 d-none">
                <label for="btnlink2">Button link</label>
                <textarea class="form-control" id="btnlink2" name="btnlink" rows="1" required disabled><?php echo $btnlink[2]; ?></textarea>
            </div>
            
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable2" value="block" <?php if ($status[2]=='block' ){ echo 'checked' ; } ?>

                        >
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable2" value="none" <?php if ($status[2]=='none' ){ echo 'checked' ; } ?>
                        >
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group col-sm-6">
                <legend>Date counter is:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterenable2" value="block" <?php if ($counterstatus[2]=='block' ){ echo 'checked' ; } ?>>
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable2" value="none" <?php if ($counterstatus[2]=='none' ){ echo 'checked' ; } ?>>
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="d-none">
                <input type="radio" class="form-check-input" name="id" id="id2" value="3" checked>
            </fieldset>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div id="start" class="tabcontent">
    <form action="promobox.php" method="post">
        <div class="form-group">
            <label for="heading3">Heading</label>
            <textarea class="form-control" id="heading3" name="heading" rows="2" required><?php echo $heading[3]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="content3">Content</label>
            <textarea class="form-control" id="content3" name="content" rows="2" required><?php echo $content[3]; ?></textarea>
            <small class="form-text text-muted">HTML is allowed.</small>
        </div>
        <div class="row">
            <div class="form-group col-sm-6 mb-3 mb-md-0 d-none">
                <label for="btn3">Button</label>
                <textarea class="form-control" id="btn3" name="btn" rows="1" required disabled><?php echo $btn[3]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="btncolor3">Button color</label>
                <textarea class="form-control" id="btncolor3" name="btncolor" rows="1" required><?php echo $btncolor[3]; ?></textarea>
            </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="date3">Final date</label>
                    <textarea class="form-control" id="date3" name="date" rows="1" required><?php echo $date[3]; ?></textarea>
                    <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
            </div>
            <div class="form-group col-12 mb-3 mb-md-0">
                    <label for="imglink3">Image link</label>
                    <textarea class="form-control" id="imglink3" name="imglink" rows="1"><?php echo $imglink[3]; ?></textarea>
                    <small class="form-text text-muted">If you don't want to use image, leave empty</small>
                </div>
            <div class="form-group col-12 d-none">
                <label for="btnlink3">Button link</label>
                <textarea class="form-control" id="btnlink3" name="btnlink" rows="1" required disabled><?php echo $btnlink[3]; ?></textarea>
            </div>
            
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable3" value="block" <?php if ($status[3]=='block' ){ echo 'checked' ; } ?>

                        >
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable3" value="none" <?php if ($status[3]=='none' ){ echo 'checked' ; } ?>
                        >
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group col-sm-6">
                <legend>Date counter is:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterenable3" value="block" <?php if ($counterstatus[3]=='block' ){ echo 'checked' ; } ?>>
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable3" value="none" <?php if ($counterstatus[3]=='none' ){ echo 'checked' ; } ?>>
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="d-none">
                <input type="radio" class="form-check-input" name="id" id="id3" value="4" checked>
            </fieldset>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div id="promo" class="tabcontent">
    <div class="tab pb-0 pb-sm-2 row mx-1" style="border: none;">
        <button class="col-6 col-md-auto tablinks" id="button1" style="transition: none; border:#ccc solid 2px;">1</button>
        <button class="col-6 col-md-auto tablinks" id="button2" style="transition: none;">2</button>
    </div>
    <div class="firstbanner">
        <form action="promobox.php" method="post">
            <div class="form-group">
                <label for="heading4">Heading</label>
                <textarea class="form-control" id="heading4" name="heading" rows="2" required><?php echo $heading[4]; ?></textarea>
            </div>
            <div class="form-group">
                <label for="content4">Content</label>
                <textarea class="form-control" id="content4" name="content" rows="2" required><?php echo $content[4]; ?></textarea>
                <small class="form-text text-muted">HTML is allowed.</small>
            </div>
            <div class="row">
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="btn4">Button</label>
                    <textarea class="form-control" id="btn4" name="btn" rows="1" required><?php echo $btn[4]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="btncolor4">Button color</label>
                <textarea class="form-control" id="btncolor4" name="btncolor" rows="1" required><?php echo $btncolor[4]; ?></textarea>
            </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="btnlink4">Button link</label>
                    <textarea class="form-control" id="btnlink4" name="btnlink" rows="1" required><?php echo $btnlink[4]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="date4">Final date</label>
                    <textarea class="form-control" id="date4" name="date" rows="1" required><?php echo $date[4]; ?></textarea>
                    <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
                </div>
                <div class="form-group col-12 mb-3 mb-md-0">
                    <label for="imglink4">Image link</label>
                    <textarea class="form-control" id="imglink4" name="imglink" rows="1"><?php echo $imglink[4]; ?></textarea>
                    <small class="form-text text-muted">If you don't want to use image, leave empty</small>
                </div>
                <fieldset class="form-group col-sm-6">
                    <legend>Promoboxes are:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="enable4" value="block" <?php if ($status[4]=='block' ){ echo 'checked' ; } ?>

                            >
                            Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="disable4" value="none" <?php if ($status[4]=='none' ){ echo 'checked' ; } ?>
                            >
                            Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group col-sm-6">
                    <legend>Date counter is:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterenable4" value="block" <?php if ($counterstatus[4]=='block' ){ echo 'checked' ; } ?>>
                            Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable4" value="none" <?php if ($counterstatus[4]=='none' ){ echo 'checked' ; } ?>>
                            Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="d-none">
                    <input type="radio" class="form-check-input" name="id" id="id4" value="5" checked>
                </fieldset>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="secondbanner" style="display:none;">
        <form action="promobox.php" method="post">
            <div class="form-group">
                <label for="heading5">Heading</label>
                <textarea class="form-control" id="heading5" name="heading" rows="2" required><?php echo $heading[5]; ?></textarea>
            </div>
            <div class="form-group">
                <label for="content5">Content</label>
                <textarea class="form-control" id="content5" name="content" rows="2" required><?php echo $content[5]; ?></textarea>
                <small class="form-text text-muted">HTML is allowed.</small>
            </div>
            <div class="row">
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="btn5">Button</label>
                    <textarea class="form-control" id="btn5" name="btn" rows="1" required><?php echo $btn[5]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="btncolor5">Button color</label>
                <textarea class="form-control" id="btncolor5" name="btncolor" rows="1" required><?php echo $btncolor[5]; ?></textarea>
            </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="btnlink5">Button link</label>
                    <textarea class="form-control" id="btnlink5" name="btnlink" rows="1" required><?php echo $btnlink[5]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="date5">Final date</label>
                    <textarea class="form-control" id="date5" name="date" rows="1" required><?php echo $date[5]; ?></textarea>
                    <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
                </div>
                <div class="form-group col-12 mb-3 mb-md-0">
                    <label for="imglink5">Image link</label>
                    <textarea class="form-control" id="imglink5" name="imglink" rows="1"><?php echo $imglink[5]; ?></textarea>
                    <small class="form-text text-muted">If you don't want to use image, leave empty</small>
                </div>
                <fieldset class="form-group col-sm-6">
                    <legend>Promoboxes are:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="enable5" value="block" <?php if ($status[5]=='block' ){ echo 'checked' ; } ?>

                            >
                            Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="disable5" value="none" <?php if ($status[5]=='none' ){ echo 'checked' ; } ?>
                            >
                            Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group col-sm-6">
                    <legend>Date counter is:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterenable5" value="block" <?php if ($counterstatus[5]=='block' ){ echo 'checked' ; } ?>>
                            Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable5" value="none" <?php if ($counterstatus[5]=='none' ){ echo 'checked' ; } ?>>
                            Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="d-none">
                    <input type="radio" class="form-check-input" name="id" id="id5" value="6" checked>
                </fieldset>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div id="banner" class="tabcontent">
    <form action="banner.php" method="post">
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="bannercontent" rows="14" required><?php echo $bannercontent[0]; ?></textarea>
            <small class="form-text text-muted">HTML is allowed.</small>
        </div>
        <fieldset class="form-group">
            <legend>Banner is:</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="bannerstatus" id="enable" value="enable" <?php if ($bannerstatus[0]=='enable' ){ echo 'checked' ; } ?>>
                    Enabled
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="bannerstatus" id="disable" value="disable" <?php if ($bannerstatus[0]=='disable' ){ echo 'checked' ; } ?>>
                    Disabled
                </label>
            </div>
        </fieldset>
        <fieldset class="d-none">
            <input type="radio" class="form-check-input" name="id" id="enable" value="1" checked>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<a href="logout.php" style="float: right;">Log out</a>
