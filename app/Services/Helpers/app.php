<?php


    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Http;
    use App\Notifications\RegisterConfirmPay;

    /**
     * @return string : public | public_html | empty
     */
    if (!function_exists('isPublicPathExist')) 
    {     
        function isPublicPathExist() 
        {
            return env('APP_ENV') == 'local' ? 'public/' : '';
        }
    }  
    

    /**
     * @param string : user's name | app_name default value
     * @return string : url of resource from https://ui-avatars.com
     */
    if (!function_exists('uiAvatar')) 
    {     
        function uiavatar($name = '') 
        {
            return 'https://ui-avatars.com/api/?name='. (empty($name) ? env('APP_NAME') : $name);
        }
    }  

    /**
     * @param string : user agent ip address
     * @return json : geo data
     */
    if (!function_exists('geoIp')) 
    {     
        function geoip(string $ip) 
        {
            $geoip = Http::get('http://ip-api.com/json/' .$ip);
            return $geoip->json();
        }
    } 
    
    /**
     * @param string : value to format
     * @param string : currency 
     * @param string : sepator
     * @return string : amount - sep - currency 
     */
    if (!function_exists('moneyFormat')) 
    {
        function moneyFormat(string $amount, string $currency = "GNF", string $sep = " ") 
        {
            $number = number_format($amount, 0, ',', $sep);
            return $number. " " .$currency;
        }   
    }


   

    /**
     * @param string : transaction ref
     * @return json : http response 
     */
    if (!function_exists('wavecistatus')) 
    {
        function wavecistatus(string $ref) 
        {
            $request = Http::withHeaders([
                'Authorization'=>env('FLUTTERWAVE_AUTH')
                ])->get(env('WAVECI_HOST') ."/verify_by_reference?tx_ref=". $ref);
            if ($request->ok()) 
                return $request->json();

            return $request->body();
        }   
    }

    

    /**
     * @param string : transaction ref
     * @return json : http response 
     */
    if (!function_exists('mtncistatus')) 
    {
        function mtncistatus(string $ref) 
        {
            $request = Http::withHeaders([
                'Authorization'=>env('FLUTTERWAVE_AUTH')
                ])->get(env('WAVECI_HOST') ."/verify_by_reference?tx_ref=". $ref);
            if ($request->ok()) 
                return $request->json();

            return $request->body();
        }   
    }
    
    
    
    /**
     * @param string $money : The amount to format
     * @param string $sep : The separator who need to replace
     * @param string $currency : The currency of the money
     * @return string : formatted money 
     */
    if (!function_exists('cinetpaytoken')) 
    {
        function cinetpaytoken() 
        {
            $curl = curl_init();

            curl_setopt_array($curl, [
              CURLOPT_URL => "https://client.cinetpay.com/v1/auth/login",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => "-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"apikey\"\r\n\r\n525830545660d86055a73b1.49750985\r\n-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"password\"\r\n\r\n19Malachie4@...\r\n-----011000010111000001101001--\r\n",
              CURLOPT_HTTPHEADER => [
                "content-type: multipart/form-data; boundary=---011000010111000001101001"
              ],
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
              return json_decode($response)->data->token;
            }
        }   
    }
    
    /**
     * @param string $money : The amount to format
     * @param string $sep : The separator who need to replace
     * @param string $currency : The currency of the money
     * @return string : formatted money 
     */
    if (!function_exists('cinetpaybalance')) 
    {
        function cinetpaybalance() 
        {
            $request = Http::get(env('CINETPAY_BASE') .'/transfer/check/balance', [ 'token' => cinetpaytoken(), 'lang' => app()->getLocale() ]);
            
            if ($request->ok()) 
                return $request->json()['data']['available'];

            return $request->body();
        }   
    }
    
    /**
     * @param string $money : The amount to format
     * @param string $sep : The separator who need to replace
     * @param string $currency : The currency of the money
     * @return string : formatted money 
     */
    if (!function_exists('flutterwavebalance')) 
    {
        function flutterwavebalance() 
        {
            $request = Http::withHeaders(['Authorization'=>env('FLUTTERWAVE_AUTH')])
                ->get(env('FLUTTERWAVE_HOST') .'/balances/'.strtoupper(auth()->user()->country->currency));
            
            if ($request->ok()) 
                return $request->json()['data']['available_balance'];
    
            return $request->body();
        }   
    }    