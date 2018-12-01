<div class="tab pb-0 pb-sm-2 row mx-1">
    <button class="col-6 col-sm-auto tablinks active" onclick="openCategory(event, 'promobox')">Home</button>
    <button class="col-6 col-sm-auto tablinks" onclick="openCategory(event, 'app')">/app</button>
    <button class="col-6 col-sm-auto tablinks" onclick="openCategory(event, 'business')">/business</button>
    <button class="col-6 col-sm-auto tablinks" onclick="openCategory(event, 'start')">/start</button>
    <button class="col-6 col-sm-auto tablinks" onclick="openCategory(event, 'promo')">/promo</button>
    <button class="col-6 col-sm-auto tablinks" onclick="openCategory(event, 'login')">/login</button>
    <button class="col-6 col-sm-auto tablinks" onclick="openCategory(event, 'banner')">Banner</button>
</div>

<div id="promobox" class="tabcontent">
    <form action="promobox.php" method="post">
        <div class="row">
            <div class="form-group col-12">
                <label for="heading0">Heading</label>
                <textarea class="form-control" id="heading0" name="heading" rows="2" required><?php echo $heading[0]; ?></textarea>
            </div>
            <div class="form-group col-12">
                <label for="content0">Content</label>
                <textarea class="form-control" id="content0" name="content" rows="2" required><?php echo $content[0]; ?></textarea>
                <small class="form-text text-muted">HTML is allowed.</small>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="btn0">Button</label>
                <textarea class="form-control" id="btn0" name="btn" rows="1" required><?php echo $btn[0]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="heading0">Final date</label>
                <textarea class="form-control" id="date0" name="date" rows="1" required><?php echo $date[0]; ?></textarea>
                <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
            </div>
            <div class="form-group col-sm-6">
                <label for="btnlink0">Button link</label>
                <textarea class="form-control" id="btnlink0" name="btnlink" rows="1" required><?php echo $btnlink[0]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="btncolor0">Button color</label>
                <textarea class="form-control" id="btncolor0" name="btncolor" rows="1" required><?php echo $btncolor[0]; ?></textarea>
            </div>
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable0" value="block" <?php if ($status[0]=='block' ){ echo 'checked' ; } ?>>Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable0" value="none" <?php if ($status[0]=='none' ){ echo 'checked' ; } ?>>Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group col-sm-6">
                <legend>Date counter is:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterenable0" value="block" <?php if ($counterstatus[0]=='block' ){ echo 'checked' ; } ?>>Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable0" value="none" <?php if ($counterstatus[0]=='none' ){ echo 'checked' ; } ?>>Disabled
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
        <div class="row">
            <div class="form-group col-12">
                <label for="heading1">Heading</label>
                <textarea class="form-control" id="heading1" name="heading" rows="2" required><?php echo $heading[1]; ?></textarea>
            </div>
            <div class="form-group col-12">
                <label for="content1">Content</label>
                <textarea class="form-control" id="content1" name="content" rows="2" required><?php echo $content[1]; ?></textarea>
                <small class="form-text text-muted">HTML is allowed.</small>
            </div>
            <div class="form-group col-sm-6 mb-3">
                <label for="btn1">Button</label>
                <textarea class="form-control" id="btn1" name="btn" rows="1" required><?php echo $btn[1]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="btncolor1">Button color</label>
                <textarea class="form-control" id="btncolor1" name="btncolor" rows="1" required><?php echo $btncolor[1]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3">
                <label for="btnlink1">Button link</label>
                <textarea class="form-control" id="btnlink1" name="btnlink" rows="1" required><?php echo $btnlink[1]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="date1">Final date</label>
                <textarea class="form-control" id="date1" name="date" rows="1" required><?php echo $date[1]; ?></textarea>
                <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
            </div>
            <div class="form-group col-8 col-sm-10 mb-3 mb-sm-0">
                <label for="imglink1">Image link</label>
                <textarea class="form-control" id="imglink1" name="imglink" rows="1"><?php echo $imglink[1]; ?></textarea>
                <small class="form-text text-muted">If you don't want to use image, leave empty</small>
            </div>
            <div class="form-group col-4 col-sm-2 mb-3 mb-sm-0">
                <label for="order1">Order</label>
                <select name="order" class="form-control" id="order1">
                    <option value="1" <?php echo ($order[1]==1) ? "selected" : "" ;?>>1</option>
                    <option value="2" <?php echo ($order[1]==2) ? "selected" : "" ;?>>2</option>
                    <option value="3" <?php echo ($order[1]==3) ? "selected" : "" ;?>>3</option>
                    <option value="4" <?php echo ($order[1]==4) ? "selected" : "" ;?>>4</option>
                    <option value="5" <?php echo ($order[1]==5) ? "selected" : "" ;?>>5</option>
                </select>
            </div>
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable1" value="block" <?php if ($status[1]=='block' ){ echo 'checked' ; } ?>>Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable1" value="none" <?php if ($status[1]=='none' ){ echo 'checked' ; } ?>>Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group col-sm-6">
                <legend>Date counter is:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterenable1" value="block" <?php if ($counterstatus[1]=='block' ){ echo 'checked' ; } ?>>Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable1" value="none" <?php if ($counterstatus[1]=='none' ){ echo 'checked' ; } ?>>Disabled
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
        <div class="row">
            <div class="form-group col-12">
                <label for="heading">Heading</label>
                <textarea class="form-control" id="heading" name="heading" rows="2" required><?php echo $heading[2]; ?></textarea>
            </div>
            <div class="form-group col-12">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="2" required><?php echo $content[2]; ?></textarea>
                <small class="form-text text-muted">HTML is allowed.</small>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="btn">Button</label>
                <textarea class="form-control" id="btn" name="btn" rows="1" required><?php echo $btn[2]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="btncolor2">Button color</label>
                <textarea class="form-control" id="btncolor2" name="btncolor" rows="1" required><?php echo $btncolor[2]; ?></textarea>
            </div>
            <div class="form-group col-sm-6">
                <label for="btnlink2">Button link</label>
                <textarea class="form-control" id="btnlink2" name="btnlink" rows="1" required><?php echo $btnlink[2]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="date2">Final date</label>
                <textarea class="form-control" id="date2" name="date" rows="1" required><?php echo $date[2]; ?></textarea>
                <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
            </div>
            <div class="form-group col-8 col-sm-10 mb-3 mb-sm-0">
                <label for="imglink2">Image link</label>
                <textarea class="form-control" id="imglink2" name="imglink" rows="1"><?php echo $imglink[2]; ?></textarea>
                <small class="form-text text-muted">If you don't want to use image, leave empty</small>
            </div>
            <div class="form-group col-4 col-sm-2 mb-3 mb-sm-0">
                <label for="order2">Order</label>
                <select name="order" class="form-control" id="order2">
                    <option value="1" <?php echo ($order[2]==1) ? "selected" : "" ;?>>1</option>
                    <option value="2" <?php echo ($order[2]==2) ? "selected" : "" ;?>>2</option>
                    <option value="3" <?php echo ($order[2]==3) ? "selected" : "" ;?>>3</option>
                    <option value="4" <?php echo ($order[2]==4) ? "selected" : "" ;?>>4</option>
                    <option value="5" <?php echo ($order[2]==5) ? "selected" : "" ;?>>5</option>
                </select>
            </div>
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable2" value="block" <?php if ($status[2]=='block' ){ echo 'checked' ; } ?>>Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable2" value="none" <?php if ($status[2]=='none' ){ echo 'checked' ; } ?>>Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group col-sm-6">
                <legend>Date counter is:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterenable2" value="block" <?php if ($counterstatus[2]=='block' ){ echo 'checked' ; } ?>>Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable2" value="none" <?php if ($counterstatus[2]=='none' ){ echo 'checked' ; } ?>>Disabled
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
        <div class="row">
            <div class="form-group col-12">
                <label for="heading3">Heading</label>
                <textarea class="form-control" id="heading3" name="heading" rows="2" required><?php echo $heading[3]; ?></textarea>
            </div>
            <div class="form-group col-12">
                <label for="content3">Content</label>
                <textarea class="form-control" id="content3" name="content" rows="2" required><?php echo $content[3]; ?></textarea>
                <small class="form-text text-muted">HTML is allowed.</small>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="btn3">Button</label>
                <textarea class="form-control" id="btn3" name="btn" rows="1" required><?php echo $btn[3]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="btncolor3">Button color</label>
                <textarea class="form-control" id="btncolor3" name="btncolor" rows="1" required><?php echo $btncolor[3]; ?></textarea>
            </div>
            <div class="form-group col-6">
                <label for="btnlink3">Button link</label>
                <textarea class="form-control" id="btnlink3" name="btnlink" rows="1" required><?php echo $btnlink[3]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="date3">Final date</label>
                <textarea class="form-control" id="date3" name="date" rows="1" required><?php echo $date[3]; ?></textarea>
                <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
            </div>
            <div class="form-group col-8 col-sm-10 mb-3 mb-sm-0">
                <label for="imglink3">Image link</label>
                <textarea class="form-control" id="imglink3" name="imglink" rows="1"><?php echo $imglink[3]; ?></textarea>
                <small class="form-text text-muted">If you don't want to use image, leave empty</small>
            </div>
            <div class="form-group col-4 col-sm-2 mb-3 mb-sm-0">
                <label for="order3">Order</label>
                <select name="order" class="form-control" id="order3">
                    <option value="1" <?php echo ($order[3]==1) ? "selected" : "" ;?>>1</option>
                    <option value="2" <?php echo ($order[3]==2) ? "selected" : "" ;?>>2</option>
                    <option value="3" <?php echo ($order[3]==3) ? "selected" : "" ;?>>3</option>
                    <option value="4" <?php echo ($order[3]==4) ? "selected" : "" ;?>>4</option>
                    <option value="5" <?php echo ($order[3]==5) ? "selected" : "" ;?>>5</option>
                </select>
            </div>
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable3" value="block" <?php if ($status[3]=='block' ){ echo 'checked' ; } ?>>Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable3" value="none" <?php if ($status[3]=='none' ){ echo 'checked' ; } ?>>Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group col-sm-6">
                <legend>Date counter is:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterenable3" value="block" <?php if ($counterstatus[3]=='block' ){ echo 'checked' ; } ?>>Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable3" value="none" <?php if ($counterstatus[3]=='none' ){ echo 'checked' ; } ?>>Disabled
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
        <button class="col-2 col-sm-auto tablinks py-2" id="button1" style="transition: none; border:#ccc solid 2px;">1</button>
        <button class="col-2 col-sm-auto tablinks py-2" id="button2" style="transition: none;">2</button>
        <button class="col-2 col-sm-auto tablinks py-2" id="button3" style="transition: none;">3</button>
        <button class="col-2 col-sm-auto tablinks py-2" id="button4" style="transition: none;">4</button>
        <button class="col-2 col-sm-auto tablinks py-2" id="button5" style="transition: none;">5</button>
        <button class="col-2 col-sm-auto tablinks py-2" id="button6" style="transition: none;">6</button>
    </div>
    <div class="banner1">
        <form action="promobox.php" method="post">
            <div class="row">
                <div class="form-group col-12">
                    <label for="heading4">Heading</label>
                    <textarea class="form-control" id="heading4" name="heading" rows="2" required><?php echo $heading[4]; ?></textarea>
                </div>
                <div class="form-group col-12">
                    <label for="content4">Content</label>
                    <textarea class="form-control" id="content4" name="content" rows="2" required><?php echo $content[4]; ?></textarea>
                    <small class="form-text text-muted">HTML is allowed.</small>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btn4">Button</label>
                    <textarea class="form-control" id="btn4" name="btn" rows="1" required><?php echo $btn[4]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btncolor4">Button color</label>
                    <textarea class="form-control" id="btncolor4" name="btncolor" rows="1" required><?php echo $btncolor[4]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btnlink4">Button link</label>
                    <textarea class="form-control" id="btnlink4" name="btnlink" rows="1" required><?php echo $btnlink[4]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="date4">Final date</label>
                    <textarea class="form-control" id="date4" name="date" rows="1" required><?php echo $date[4]; ?></textarea>
                    <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
                </div>
                <div class="form-group col-8 col-sm-10 mb-3 mb-sm-0">
                    <label for="imglink4">Image link</label>
                    <textarea class="form-control" id="imglink4" name="imglink" rows="1"><?php echo $imglink[4]; ?></textarea>
                    <small class="form-text text-muted">If you don't want to use image, leave empty</small>
                </div>
                <div class="form-group col-4 col-sm-2 mb-3 mb-sm-0">
                    <label for="order4">Order</label>
                    <select name="order" class="form-control" id="order4">
                        <option value="1" <?php echo ($order[4]==1) ? "selected" : "" ;?>>1</option>
                        <option value="2" <?php echo ($order[4]==2) ? "selected" : "" ;?>>2</option>
                        <option value="3" <?php echo ($order[4]==3) ? "selected" : "" ;?>>3</option>
                        <option value="4" <?php echo ($order[4]==4) ? "selected" : "" ;?>>4</option>
                        <option value="5" <?php echo ($order[4]==5) ? "selected" : "" ;?>>5</option>
                        <option value="6" <?php echo ($order[4]==6) ? "selected" : "" ;?>>6</option>
                    </select>
                </div>
                <fieldset class="form-group col-sm-6">
                    <legend>Promoboxes are:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="enable4" value="block" <?php if ($status[4]=='block' ){ echo 'checked' ; } ?>>Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="disable4" value="none" <?php if ($status[4]=='none' ){ echo 'checked' ; } ?>
                            >Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group col-sm-6">
                    <legend>Date counter is:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterenable4" value="block" <?php if ($counterstatus[4]=='block' ){ echo 'checked' ; } ?>>Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable4" value="none" <?php if ($counterstatus[4]=='none' ){ echo 'checked' ; } ?>>Disabled
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
    <div class="banner2" style="display:none;">
        <form action="promobox.php" method="post">
            <div class="row">
                <div class="form-group col-12">
                    <label for="heading5">Heading</label>
                    <textarea class="form-control" id="heading5" name="heading" rows="2" required><?php echo $heading[5]; ?></textarea>
                </div>
                <div class="form-group col-12">
                    <label for="content5">Content</label>
                    <textarea class="form-control" id="content5" name="content" rows="2" required><?php echo $content[5]; ?></textarea>
                    <small class="form-text text-muted">HTML is allowed.</small>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btn5">Button</label>
                    <textarea class="form-control" id="btn5" name="btn" rows="1" required><?php echo $btn[5]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btncolor5">Button color</label>
                    <textarea class="form-control" id="btncolor5" name="btncolor" rows="1" required><?php echo $btncolor[5]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btnlink5">Button link</label>
                    <textarea class="form-control" id="btnlink5" name="btnlink" rows="1" required><?php echo $btnlink[5]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="date5">Final date</label>
                    <textarea class="form-control" id="date5" name="date" rows="1" required><?php echo $date[5]; ?></textarea>
                    <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
                </div>
                <div class="form-group col-8 col-sm-10 mb-3 mb-sm-0">
                    <label for="imglink5">Image link</label>
                    <textarea class="form-control" id="imglink5" name="imglink" rows="1"><?php echo $imglink[5]; ?></textarea>
                    <small class="form-text text-muted">If you don't want to use image, leave empty</small>
                </div>
                <div class="form-group col-4 col-sm-2 mb-3 mb-sm-0">
                    <label for="order5">Order</label>
                    <select name="order" class="form-control" id="order5">
                        <option value="1" <?php echo ($order[5]==1) ? "selected" : "" ;?>>1</option>
                        <option value="2" <?php echo ($order[5]==2) ? "selected" : "" ;?>>2</option>
                        <option value="3" <?php echo ($order[5]==3) ? "selected" : "" ;?>>3</option>
                        <option value="4" <?php echo ($order[5]==4) ? "selected" : "" ;?>>4</option>
                        <option value="5" <?php echo ($order[5]==5) ? "selected" : "" ;?>>5</option>
                        <option value="6" <?php echo ($order[5]==6) ? "selected" : "" ;?>>6</option>
                    </select>
                </div>
                <fieldset class="form-group col-sm-6">
                    <legend>Promoboxes are:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="enable5" value="block" <?php if ($status[5]=='block' ){ echo 'checked' ; } ?>>Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="disable5" value="none" <?php if ($status[5]=='none' ){ echo 'checked' ; } ?>
                            >Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group col-sm-6">
                    <legend>Date counter is:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterenable5" value="block" <?php if ($counterstatus[5]=='block' ){ echo 'checked' ; } ?>>Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable5" value="none" <?php if ($counterstatus[5]=='none' ){ echo 'checked' ; } ?>>Disabled
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
    <div class="banner3" style="display:none;">
        <form action="promobox.php" method="post">
            <div class="row">
                <div class="form-group col-12">
                    <label for="heading6">Heading</label>
                    <textarea class="form-control" id="heading6" name="heading" rows="2" required><?php echo $heading[6]; ?></textarea>
                </div>
                <div class="form-group col-12">
                    <label for="content6">Content</label>
                    <textarea class="form-control" id="content6" name="content" rows="2" required><?php echo $content[6]; ?></textarea>
                    <small class="form-text text-muted">HTML is allowed.</small>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btn6">Button</label>
                    <textarea class="form-control" id="btn6" name="btn" rows="1" required><?php echo $btn[6]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btncolor6">Button color</label>
                    <textarea class="form-control" id="btncolor6" name="btncolor" rows="1" required><?php echo $btncolor[6]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btnlink6">Button link</label>
                    <textarea class="form-control" id="btnlink6" name="btnlink" rows="1" required><?php echo $btnlink[6]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="date6">Final date</label>
                    <textarea class="form-control" id="date6" name="date" rows="1" required><?php echo $date[6]; ?></textarea>
                    <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
                </div>
                <div class="form-group col-8 col-sm-10 mb-3 mb-sm-0">
                    <label for="imglink6">Image link</label>
                    <textarea class="form-control" id="imglink6" name="imglink" rows="1"><?php echo $imglink[6]; ?></textarea>
                    <small class="form-text text-muted">If you don't want to use image, leave empty</small>
                </div>
                <div class="form-group col-4 col-sm-2 mb-3 mb-sm-0">
                    <label for="order6">Order</label>
                    <select name="order" class="form-control" id="order6">
                        <option value="1" <?php echo ($order[6]==1) ? "selected" : "" ;?>>1</option>
                        <option value="2" <?php echo ($order[6]==2) ? "selected" : "" ;?>>2</option>
                        <option value="3" <?php echo ($order[6]==3) ? "selected" : "" ;?>>3</option>
                        <option value="4" <?php echo ($order[6]==4) ? "selected" : "" ;?>>4</option>
                        <option value="5" <?php echo ($order[6]==5) ? "selected" : "" ;?>>5</option>
                        <option value="6" <?php echo ($order[6]==6) ? "selected" : "" ;?>>6</option>
                    </select>
                </div>
                <fieldset class="form-group col-sm-6">
                    <legend>Promoboxes are:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="enable6" value="block" <?php if ($status[6]=='block' ){ echo 'checked' ; } ?>>Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="disable6" value="none" <?php if ($status[6]=='none' ){ echo 'checked' ; } ?>
                            >Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group col-sm-6">
                    <legend>Date counter is:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterenable6" value="block" <?php if ($counterstatus[6]=='block' ){ echo 'checked' ; } ?>>Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable6" value="none" <?php if ($counterstatus[6]=='none' ){ echo 'checked' ; } ?>>Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="d-none">
                    <input type="radio" class="form-check-input" name="id" id="id6" value="7" checked>
                </fieldset>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="banner4" style="display:none;">
        <form action="promobox.php" method="post">
            <div class="row">
                <div class="form-group col-12">
                    <label for="heading7">Heading</label>
                    <textarea class="form-control" id="heading7" name="heading" rows="2" required><?php echo $heading[7]; ?></textarea>
                </div>
                <div class="form-group col-12">
                    <label for="content7">Content</label>
                    <textarea class="form-control" id="content7" name="content" rows="2" required><?php echo $content[7]; ?></textarea>
                    <small class="form-text text-muted">HTML is allowed.</small>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btn7">Button</label>
                    <textarea class="form-control" id="btn7" name="btn" rows="1" required><?php echo $btn[7]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btncolor7">Button color</label>
                    <textarea class="form-control" id="btncolor7" name="btncolor" rows="1" required><?php echo $btncolor[7]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btnlink7">Button link</label>
                    <textarea class="form-control" id="btnlink7" name="btnlink" rows="1" required><?php echo $btnlink[7]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="date7">Final date</label>
                    <textarea class="form-control" id="date7" name="date" rows="1" required><?php echo $date[7]; ?></textarea>
                    <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
                </div>
                <div class="form-group col-8 col-sm-10 mb-3 mb-sm-0">
                    <label for="imglink7">Image link</label>
                    <textarea class="form-control" id="imglink7" name="imglink" rows="1"><?php echo $imglink[7]; ?></textarea>
                    <small class="form-text text-muted">If you don't want to use image, leave empty</small>
                </div>
                <div class="form-group col-4 col-sm-2 mb-3 mb-sm-0">
                    <label for="order7">Order</label>
                    <select name="order" class="form-control" id="order7">
                        <option value="1" <?php echo ($order[7]==1) ? "selected" : "" ;?>>1</option>
                        <option value="2" <?php echo ($order[7]==2) ? "selected" : "" ;?>>2</option>
                        <option value="3" <?php echo ($order[7]==3) ? "selected" : "" ;?>>3</option>
                        <option value="4" <?php echo ($order[7]==4) ? "selected" : "" ;?>>4</option>
                        <option value="5" <?php echo ($order[7]==5) ? "selected" : "" ;?>>5</option>
                        <option value="6" <?php echo ($order[7]==6) ? "selected" : "" ;?>>6</option>
                    </select>
                </div>
                <fieldset class="form-group col-sm-6">
                    <legend>Promoboxes are:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="enable7" value="block" <?php if ($status[7]=='block' ){ echo 'checked' ; } ?>>Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="disable7" value="none" <?php if ($status[7]=='none' ){ echo 'checked' ; } ?>
                            >Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group col-sm-6">
                    <legend>Date counter is:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterenable7" value="block" <?php if ($counterstatus[7]=='block' ){ echo 'checked' ; } ?>>Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable7" value="none" <?php if ($counterstatus[7]=='none' ){ echo 'checked' ; } ?>>Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="d-none">
                    <input type="radio" class="form-check-input" name="id" id="id7" value="8" checked>
                </fieldset>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="banner5" style="display:none;">
        <form action="promobox.php" method="post">
            <div class="row">
                <div class="form-group col-12">
                    <label for="heading8">Heading</label>
                    <textarea class="form-control" id="heading8" name="heading" rows="2" required><?php echo $heading[8]; ?></textarea>
                </div>
                <div class="form-group col-12">
                    <label for="content8">Content</label>
                    <textarea class="form-control" id="content8" name="content" rows="2" required><?php echo $content[8]; ?></textarea>
                    <small class="form-text text-muted">HTML is allowed.</small>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btn8">Button</label>
                    <textarea class="form-control" id="btn8" name="btn" rows="1" required><?php echo $btn[8]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btncolor8">Button color</label>
                    <textarea class="form-control" id="btncolor8" name="btncolor" rows="1" required><?php echo $btncolor[8]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btnlink8">Button link</label>
                    <textarea class="form-control" id="btnlink8" name="btnlink" rows="1" required><?php echo $btnlink[8]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="date8">Final date</label>
                    <textarea class="form-control" id="date8" name="date" rows="1" required><?php echo $date[8]; ?></textarea>
                    <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
                </div>
                <div class="form-group col-8 col-sm-10 mb-3 mb-sm-0">
                    <label for="imglink8">Image link</label>
                    <textarea class="form-control" id="imglink8" name="imglink" rows="1"><?php echo $imglink[8]; ?></textarea>
                    <small class="form-text text-muted">If you don't want to use image, leave empty</small>
                </div>
                <div class="form-group col-4 col-sm-2 mb-3 mb-sm-0">
                    <label for="order8">Order</label>
                    <select name="order" class="form-control" id="order5">
                        <option value="1" <?php echo ($order[8]==1) ? "selected" : "" ;?>>1</option>
                        <option value="2" <?php echo ($order[8]==2) ? "selected" : "" ;?>>2</option>
                        <option value="3" <?php echo ($order[8]==3) ? "selected" : "" ;?>>3</option>
                        <option value="4" <?php echo ($order[8]==4) ? "selected" : "" ;?>>4</option>
                        <option value="5" <?php echo ($order[8]==5) ? "selected" : "" ;?>>5</option>
                        <option value="6" <?php echo ($order[8]==6) ? "selected" : "" ;?>>6</option>
                    </select>
                </div>
                <fieldset class="form-group col-sm-6">
                    <legend>Promoboxes are:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="enable8" value="block" <?php if ($status[8]=='block' ){ echo 'checked' ; } ?>>Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="disable8" value="none" <?php if ($status[8]=='none' ){ echo 'checked' ; } ?>
                            >Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group col-sm-6">
                    <legend>Date counter is:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterenable8" value="block" <?php if ($counterstatus[8]=='block' ){ echo 'checked' ; } ?>>Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable8" value="none" <?php if ($counterstatus[8]=='none' ){ echo 'checked' ; } ?>>Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="d-none">
                    <input type="radio" class="form-check-input" name="id" id="id8" value="9" checked>
                </fieldset>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="banner6" style="display:none;">
        <form action="promobox.php" method="post">
            <div class="row">
                <div class="form-group col-12">
                    <label for="heading9">Heading</label>
                    <textarea class="form-control" id="heading9" name="heading" rows="2" required><?php echo $heading[9]; ?></textarea>
                </div>
                <div class="form-group col-12">
                    <label for="content9">Content</label>
                    <textarea class="form-control" id="content9" name="content" rows="2" required><?php echo $content[9]; ?></textarea>
                    <small class="form-text text-muted">HTML is allowed.</small>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btn9">Button</label>
                    <textarea class="form-control" id="btn9" name="btn" rows="1" required><?php echo $btn[9]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btncolor9">Button color</label>
                    <textarea class="form-control" id="btncolor9" name="btncolor" rows="1" required><?php echo $btncolor[9]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="btnlink9">Button link</label>
                    <textarea class="form-control" id="btnlink9" name="btnlink" rows="1" required><?php echo $btnlink[9]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-sm-0">
                    <label for="date9">Final date</label>
                    <textarea class="form-control" id="date9" name="date" rows="1" required><?php echo $date[9]; ?></textarea>
                    <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
                </div>
                <div class="form-group col-8 col-sm-10 mb-3 mb-sm-0">
                    <label for="imglink9">Image link</label>
                    <textarea class="form-control" id="imglink9" name="imglink" rows="1"><?php echo $imglink[9]; ?></textarea>
                    <small class="form-text text-muted">If you don't want to use image, leave empty</small>
                </div>
                <div class="form-group col-4 col-sm-2 mb-3 mb-sm-0">
                    <label for="order9">Order</label>
                    <select name="order" class="form-control" id="order5">
                        <option value="1" <?php echo ($order[9]==1) ? "selected" : "" ;?>>1</option>
                        <option value="2" <?php echo ($order[9]==2) ? "selected" : "" ;?>>2</option>
                        <option value="3" <?php echo ($order[9]==3) ? "selected" : "" ;?>>3</option>
                        <option value="4" <?php echo ($order[9]==4) ? "selected" : "" ;?>>4</option>
                        <option value="5" <?php echo ($order[9]==5) ? "selected" : "" ;?>>5</option>
                        <option value="6" <?php echo ($order[9]==6) ? "selected" : "" ;?>>6</option>
                    </select>
                </div>
                <fieldset class="form-group col-sm-6">
                    <legend>Promoboxes are:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="enable9" value="block" <?php if ($status[9]=='block' ){ echo 'checked' ; } ?>>Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="disable9" value="none" <?php if ($status[9]=='none' ){ echo 'checked' ; } ?>
                            >Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group col-sm-6">
                    <legend>Date counter is:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterenable9" value="block" <?php if ($counterstatus[9]=='block' ){ echo 'checked' ; } ?>>Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable9" value="none" <?php if ($counterstatus[9]=='none' ){ echo 'checked' ; } ?>>Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="d-none">
                    <input type="radio" class="form-check-input" name="id" id="id9" value="10" checked>
                </fieldset>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="tabcontent" id="login">
    <form action="promobox.php" method="post">
        <div class="row">
            <div class="form-group col-12">
                <label for="heading10">Heading</label>
                <textarea class="form-control" id="heading10" name="heading" rows="1" required><?php echo $heading[10]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="btn10">Button</label>
                <textarea class="form-control" id="btn10" name="btn" rows="1" required><?php echo $btn[10]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="btncolor10">Button color</label>
                <textarea class="form-control" id="btncolor10" name="btncolor" rows="1" required><?php echo $btncolor[10]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-sm-0">
                <label for="btnlink10">Button link</label>
                <textarea class="form-control" id="btnlink10" name="btnlink" rows="1" required><?php echo $btnlink[10]; ?></textarea>
            </div>
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable10" value="block" <?php if ($status[10]=='block' ){ echo 'checked' ; } ?>>Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable10" value="none" <?php if ($status[10]=='none' ){ echo 'checked' ; } ?>
                        >Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="d-none">
                <input type="radio" class="form-check-input" name="id" id="id10" value="11" checked>
            </fieldset>
        </div>
        <div class="d-none">
            <input type="text" name="content" value=" ">
            <input type="text" name="order" value=" ">
            <input type="text" name="date" value=" ">
            <input type="text" name="counterstatus" value=" ">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
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
