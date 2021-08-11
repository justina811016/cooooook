<!-- create user modal） -->
<div id="create_user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">新增使用者</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <form id="create_user_table" method="POST" action="{{ route('user.store') }}">
        <div class="modal-body">
          <div class="container">
            @csrf
            <div class="form-group row">
              <div class="col-sm-4">
                <span class="red">∗</span>
                <label for="add_name" class="col-form-label">暱稱</label>
              </div>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="add_name" name="name" placeholder="請輸入暱稱">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-4">
                <span class="red">∗</span>
                <label for="add_email" class="col-form-label">信箱</label>
              </div>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="add_email" name="email" placeholder="輸入信箱">
              </div>
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            </div>
            <div class="form-group row">
              <div class="col-sm-4">
                <span class="red">∗</span>
                <label for="add_password" class="col-form-label">密碼</label>
              </div>
              <div class="col-sm-8">
                <input type="password" class="form-control" id="add_password" name="add_password" placeholder="請輸入密碼">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-4">
                <span class="red">∗</span>
                <label for="conform_password" class="col-form-label">確認密碼</label>
              </div>
              <div class="col-sm-8">
                <input type="password" class="form-control" id="conform_password" name="conform_password" placeholder="請輸入密碼">
              </div>
            </div>     
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
          <button type="button" class="btn btn-primary" id="store_user">建立</button>
        </div>
      </form>
    </div>
  </div>
</div>