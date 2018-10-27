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
            <label for="heading">Heading</label>
            <textarea class="form-control" id="heading" name="heading" rows="2" required><? echo $heading[0]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="2" required><? echo $content[0]; ?></textarea>
            <small class="form-text text-muted">HTML is allowed.</small>
        </div>
        <div class="row">
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="btn">Button</label>
                <textarea class="form-control" id="btn" name="btn" rows="1" required><? echo $btn[0]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="heading">Final date</label>
                <textarea class="form-control" id="date" name="date" rows="1" required><? echo $date[0]; ?></textarea>
                <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
            </div>
            <div class="form-group col-12">
                <label for="btnlink">Button link</label>
                <textarea class="form-control" id="btnlink" name="btnlink" rows="1" required><? echo $btnlink[0]; ?></textarea>
            </div>
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable" value="block" <?php if ($status[0]=='block' ){ echo 'checked' ; } ?>

                        >
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable" value="none" <?php if ($status[0]=='none' ){ echo 'checked' ; } ?>
                        >
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group col-sm-6">
                <legend>Date counter is:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterenable" value="block" <?php if ($counterstatus[0]=='block' ){ echo 'checked' ; } ?>>
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable" value="none" <?php if ($counterstatus[0]=='none' ){ echo 'checked' ; } ?>>
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="d-none">
                <input type="radio" class="form-check-input" name="id" id="enable" value="1" checked>
            </fieldset>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div id="app" class="tabcontent">
    <form action="promobox.php" method="post">
        <div class="form-group">
            <label for="heading">Heading</label>
            <textarea class="form-control" id="heading" name="heading" rows="2" required><? echo $heading[1]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="2" required><? echo $content[1]; ?></textarea>
            <small class="form-text text-muted">HTML is allowed.</small>
        </div>
        <div class="row">
            <div class="form-group col-sm-6 mb-3 mb-md-0 d-none">
                <label for="btn">Button</label>
                <textarea class="form-control" id="btn" name="btn" rows="1" required disabled><? echo $btn[1]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="imglink">Image link</label>
                    <textarea class="form-control" id="imglink" name="imglink" rows="1" required><? echo $imglink[1]; ?></textarea>
                </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="heading">Final date</label>
                <textarea class="form-control" id="date" name="date" rows="1" required><? echo $date[1]; ?></textarea>
                <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
            </div>
            <div class="form-group col-12 d-none">
                <label for="btnlink">Button link</label>
                <textarea class="form-control" id="btnlink" name="btnlink" rows="1" required disabled><? echo $btnlink[1]; ?></textarea>
            </div>
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable" value="block" <?php if ($status[1]=='block' ){ echo 'checked' ; } ?>

                        >
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable" value="none" <?php if ($status[1]=='none' ){ echo 'checked' ; } ?>
                        >
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group col-sm-6">
                <legend>Date counter is:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterenable" value="block" <?php if ($counterstatus[1]=='block' ){ echo 'checked' ; } ?>>
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable" value="none" <?php if ($counterstatus[1]=='none' ){ echo 'checked' ; } ?>>
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="d-none">
                <input type="radio" class="form-check-input" name="id" id="enable" value="2" checked>
            </fieldset>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div id="business" class="tabcontent">
    <form action="promobox.php" method="post">
        <div class="form-group">
            <label for="heading">Heading</label>
            <textarea class="form-control" id="heading" name="heading" rows="2" required><? echo $heading[2]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="2" required><? echo $content[2]; ?></textarea>
            <small class="form-text text-muted">HTML is allowed.</small>
        </div>
        <div class="row">
            <div class="form-group col-sm-6 mb-3 mb-md-0 d-none">
                <label for="btn">Button</label>
                <textarea class="form-control" id="btn" name="btn" rows="1" required disabled><? echo $btn[2]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="imglink">Image link</label>
                    <textarea class="form-control" id="imglink" name="imglink" rows="1" required><? echo $imglink[2]; ?></textarea>
                </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="heading">Final date</label>
                <textarea class="form-control" id="date" name="date" rows="1" required><? echo $date[2]; ?></textarea>
                <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
            </div>
            <div class="form-group col-12 d-none">
                <label for="btnlink">Button link</label>
                <textarea class="form-control" id="btnlink" name="btnlink" rows="1" required disabled><? echo $btnlink[2]; ?></textarea>
            </div>
            
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable" value="block" <?php if ($status[2]=='block' ){ echo 'checked' ; } ?>

                        >
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable" value="none" <?php if ($status[2]=='none' ){ echo 'checked' ; } ?>
                        >
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group col-sm-6">
                <legend>Date counter is:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterenable" value="block" <?php if ($counterstatus[2]=='block' ){ echo 'checked' ; } ?>>
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable" value="none" <?php if ($counterstatus[2]=='none' ){ echo 'checked' ; } ?>>
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="d-none">
                <input type="radio" class="form-check-input" name="id" id="enable" value="3" checked>
            </fieldset>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div id="start" class="tabcontent">
    <form action="promobox.php" method="post">
        <div class="form-group">
            <label for="heading">Heading</label>
            <textarea class="form-control" id="heading" name="heading" rows="2" required><? echo $heading[3]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="2" required><? echo $content[3]; ?></textarea>
            <small class="form-text text-muted">HTML is allowed.</small>
        </div>
        <div class="row">
            <div class="form-group col-sm-6 mb-3 mb-md-0 d-none">
                <label for="btn">Button</label>
                <textarea class="form-control" id="btn" name="btn" rows="1" required disabled><? echo $btn[3]; ?></textarea>
            </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="imglink">Image link</label>
                    <textarea class="form-control" id="imglink" name="imglink" rows="1" required><? echo $imglink[3]; ?></textarea>
                </div>
            <div class="form-group col-sm-6 mb-3 mb-md-0">
                <label for="heading">Final date</label>
                <textarea class="form-control" id="date" name="date" rows="1" required><? echo $date[3]; ?></textarea>
                <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
            </div>
            <div class="form-group col-12 d-none">
                <label for="btnlink">Button link</label>
                <textarea class="form-control" id="btnlink" name="btnlink" rows="1" required disabled><? echo $btnlink[3]; ?></textarea>
            </div>
            
            <fieldset class="form-group col-sm-6">
                <legend>Promoboxes are:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="enable" value="block" <?php if ($status[3]=='block' ){ echo 'checked' ; } ?>

                        >
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="disable" value="none" <?php if ($status[3]=='none' ){ echo 'checked' ; } ?>
                        >
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-group col-sm-6">
                <legend>Date counter is:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterenable" value="block" <?php if ($counterstatus[3]=='block' ){ echo 'checked' ; } ?>>
                        Enabled
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable" value="none" <?php if ($counterstatus[3]=='none' ){ echo 'checked' ; } ?>>
                        Disabled
                    </label>
                </div>
            </fieldset>
            <fieldset class="d-none">
                <input type="radio" class="form-check-input" name="id" id="enable" value="4" checked>
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
                <label for="heading">Heading</label>
                <textarea class="form-control" id="heading" name="heading" rows="2" required><? echo $heading[4]; ?></textarea>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="2" required><? echo $content[4]; ?></textarea>
                <small class="form-text text-muted">HTML is allowed.</small>
            </div>
            <div class="row">
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="btn">Button</label>
                    <textarea class="form-control" id="btn" name="btn" rows="1" required><? echo $btn[4]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="heading">Final date</label>
                    <textarea class="form-control" id="date" name="date" rows="1" required><? echo $date[4]; ?></textarea>
                    <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="btnlink">Button link</label>
                    <textarea class="form-control" id="btnlink" name="btnlink" rows="1" required><? echo $btnlink[4]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="imglink">Image link</label>
                    <textarea class="form-control" id="imglink" name="imglink" rows="1" required><? echo $imglink[4]; ?></textarea>
                </div>
                <fieldset class="form-group col-sm-6">
                    <legend>Promoboxes are:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="enable" value="block" <?php if ($status[4]=='block' ){ echo 'checked' ; } ?>

                            >
                            Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="disable" value="none" <?php if ($status[4]=='none' ){ echo 'checked' ; } ?>
                            >
                            Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group col-sm-6">
                    <legend>Date counter is:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterenable" value="block" <?php if ($counterstatus[4]=='block' ){ echo 'checked' ; } ?>>
                            Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable" value="none" <?php if ($counterstatus[4]=='none' ){ echo 'checked' ; } ?>>
                            Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="d-none">
                    <input type="radio" class="form-check-input" name="id" id="enable" value="5" checked>
                </fieldset>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="secondbanner" style="display:none;">
        <form action="promobox.php" method="post">
            <div class="form-group">
                <label for="heading">Heading</label>
                <textarea class="form-control" id="heading" name="heading" rows="2" required><? echo $heading[5]; ?></textarea>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="2" required><? echo $content[5]; ?></textarea>
                <small class="form-text text-muted">HTML is allowed.</small>
            </div>
            <div class="row">
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="btn">Button</label>
                    <textarea class="form-control" id="btn" name="btn" rows="1" required><? echo $btn[5]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="heading">Final date</label>
                    <textarea class="form-control" id="date" name="date" rows="1" required><? echo $date[5]; ?></textarea>
                    <small class="form-text text-muted">&#34;YYYY, MM, DD&#34;, e.g. &#34;2018, 9, 31&#34;</small>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="btnlink">Button link</label>
                    <textarea class="form-control" id="btnlink" name="btnlink" rows="1" required><? echo $btnlink[5]; ?></textarea>
                </div>
                <div class="form-group col-sm-6 mb-3 mb-md-0">
                    <label for="imglink">Image link</label>
                    <textarea class="form-control" id="imglink" name="imglink" rows="1" required><? echo $imglink[5]; ?></textarea>
                </div>
                <fieldset class="form-group col-sm-6">
                    <legend>Promoboxes are:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="enable" value="block" <?php if ($status[5]=='block' ){ echo 'checked' ; } ?>

                            >
                            Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="disable" value="none" <?php if ($status[5]=='none' ){ echo 'checked' ; } ?>
                            >
                            Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group col-sm-6">
                    <legend>Date counter is:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterenable" value="block" <?php if ($counterstatus[5]=='block' ){ echo 'checked' ; } ?>>
                            Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="counterstatus" id="counterdisable" value="none" <?php if ($counterstatus[5]=='none' ){ echo 'checked' ; } ?>>
                            Disabled
                        </label>
                    </div>
                </fieldset>
                <fieldset class="d-none">
                    <input type="radio" class="form-check-input" name="id" id="enable" value="6" checked>
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
            <textarea class="form-control" id="content" name="bannercontent" rows="14" required><? echo $bannercontent[0]; ?></textarea>
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
