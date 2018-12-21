<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">

                    <strong>Paper :</strong>
                  <ul>
                    @foreach ($topic as $data)
                    <li>{{$data['judul_paper']}}</li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
  </body>
</html>
