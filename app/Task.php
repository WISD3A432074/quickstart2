<?php

 namespace App;

 use Illuminate\Database\Eloquent\Model;
 use App\User;

 class Task extends Model
 {
       /**
         * 這些屬性能被批量賦值。
         *
         * @var array
         */
        protected $fillable = ['name'];

             /**
              * 取得擁有此任務的使用者。
              */
             public function user()
             {
                 return $this->belongsTo(User::class);
             }
 }
