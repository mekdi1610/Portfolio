<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <form id="comment-form" method="post" action="" role="form">
                    <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Name *" required="required">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="email *" required="required">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input id="form_name" type="text" name="website" class="form-control" placeholder="Website">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message *" style="height: 200px;" required="required"></textarea>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                        </div>
                    </div>



 <input type="hidden" name="MAX_FILE_SIZE" value="8000000" /> Select file:

 <input type="file" name="data" />

 <input type="submit" name="submit" value="Upload File" />
                  </form>
</body>
</html>