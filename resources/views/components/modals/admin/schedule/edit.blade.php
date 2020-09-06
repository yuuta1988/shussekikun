<div class="modal fade" id="editModal{{ $schedule->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{ url('/admin/schedule/update/' . $schedule->id) }}" method="post" onSubmit="return double()">
      @csrf
      <div class="modal-content">
        <button type="button" class="close text-right px-2 py-2" data-dismiss="modal" aria-label="Close">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
        <div class="modal-body">
          <div class="col-sm-12">
            <div class="form-group">
              <label>店舗<span class="text-danger">*</span></label>
              <div class="row">
                <div class="col-md-12">
                  <select class="form-control" name="store_id" required>
                    <option selected="selected" value="">選択してください</option>
                    @foreach($stores as $k => $v)
                      <option value="{{ $k }}" {{ $schedule->store_id == $k ? 'selected': '' }}>
                        {{ $v }}
                      </option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>クラス<span class="text-danger">*</span></label>
              <div class="row">
                <div class="col-md-12">
                  <select class="form-control" name="classwork_id" required>
                    <option selected="selected" value="">選択してください</option>
                    @foreach($classworks as $k => $v)
                      <option value="{{ $k }}" {{ $schedule->classwork_id == $k ? 'selected': '' }}>
                        {{ $v }}
                      </option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>曜日<span class="text-danger">*</span></label>
              <div class="row">
                <div class="col-md-12">
                  <select class="form-control" name="day" required>
                    <option selected="selected" value="">選択してください</option>
                    @foreach($days as $k => $day)
                      <option value="{{ $day->value }}" {{ $schedule->day == $day->value ? 'selected': '' }}>
                        {{ $day->description }}
                      </option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>開始時間<span class="text-danger">*</span></label>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input name="start_at" type="text" value="{{ $schedule->start_at }}" class="form-control timepicker" data-time-format="H:i" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>終了時間<span class="text-danger">*</span></label>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input name="end_at" type="text" value="{{ $schedule->end_at }}" class="form-control timepicker" data-time-format="H:i" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> キャンセル</button>
          <button type="submit" class="btn btn-primary">保存</button>
        </div>
      </div>
    </form>
  </div>
</div>