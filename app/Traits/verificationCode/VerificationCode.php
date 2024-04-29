<?php
namespace App\Traits\VerificationCode;


use Carbon\Carbon;
use App\Jobs\SendSmsJob;
use App\Models\VerificationCode as  VerificationCodeModel;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

trait VerificationCode
{
    private function createVerificationCode($mobile)
    {

        $vCode = VerificationCodeModel::query()->where([['mobile', $mobile], ['created_at', '>=', Carbon::now()->addMinutes(-2)->format('Y-m-d H:i:s')]])->first();

        if (!$vCode) {
            $code = random_int(10000, 99999);
            $code = 55555;          // set for develop time
            $guId = uniqid();
            $vCode=VerificationCodeModel::query()->create([
                "gu_id" => $guId,
                "mobile" => $mobile,
                "code" => $code,
                "info" => '',//json_encode($request->only(['first_name','last_name','password'])),
                "expire_at" => now()->addMinutes(5)
            ]);
            //if (env('APP_DEBUG') != "true")
                //$a=SendSmsJob::dispatch($mobile, "کد تایید : $code");
                //Log::info(json_encode($mobile));
        }
        return $vCode;
    }


    private function oneTimePassword($mobile)
    {

        $vCode = VerificationCodeModel::query()->where([['mobile', $mobile], ['created_at', '>=', Carbon::now()->addMinutes(-2)->format('Y-m-d H:i:s')]])->first();

        if (!$vCode) {
            $code = random_int(10000, 99999);
            $code = 55555;          // set for develop time
            $guId = uniqid();
            $vCode=VerificationCodeModel::query()->create([
                "gu_id" => $guId,
                "mobile" => $mobile,
                "code" => $code,
                "info" => '',//json_encode($request->only(['first_name','last_name','password'])),
                "expire_at" => now()->addMinutes(5)
            ]);
            //if (env('APP_DEBUG') != "true")
                //$a=SendSmsJob::dispatch($mobile, " رمز تایید : $code");
                //Log::info(json_encode($mobile));
        }
        return $vCode;
    }

    private function verifySmsCode($request)
    {
        $guId = $request->input('gu_id');
        $verificationCode = VerificationCodeModel::where(['gu_id'=> $guId])->first();

        $code = $request->input('pin1') . $request->input('pin2') . $request->input('pin3') . $request->input('pin4'). $request->input('pin5');
        log::info($code);
        Log::info($verificationCode);

        // اگر کد یافت نشد یا کد وجود نداشته باشد
        if (!$verificationCode) {
            throw ValidationException::withMessages(['code' => __("کد نامعتبر است")]);
        }


        if ($verificationCode->code != $code) {
            throw ValidationException::withMessages(['code' => __("کد وارد شده اشتباه است")]);
        }

        // اگر کد استفاده شده باشد
        if ($verificationCode->used == 1) {
            throw ValidationException::withMessages(['code' => __("کد استفاده شده است")]);
        }

        // اگر کد منقضی شده باشد
        if ($verificationCode->expire_at < now()->format('Y-m-d H:i:s')) {
            throw ValidationException::withMessages(['code' => __("کد منقضی شده است")]);
        }


        $verificationCode->used = 1;
        $verificationCode->save();
        return $verificationCode;
    }

    private function getVerificationCodeByGuId($guId)
    {
        return VerificationCodeModel::where('gu_id', $guId)->first();
    }

}
