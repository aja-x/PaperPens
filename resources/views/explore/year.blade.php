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
                  <a href="2012" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">2012</a>
                  <a href="2013" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">2013</a>
                  <a href="2014" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">2014</a>
                  <ul>
                    <strong>Name:</strong>
                    @foreach ($tahun as $data)
                    <li>{{$data['judul_paper']}}</li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
  </body>
</html>
