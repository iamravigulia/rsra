<?php
namespace Edgewizz\Rswa\Models;

use Illuminate\Database\Eloquent\Model;

class RswaQues extends Model{
    public function answers(){
        return $this->hasMany('Edgewizz\Rswa\Models\RswaAns', 'question_id');
    }
    protected $table = 'fmt_rswa_ques';
}