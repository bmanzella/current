Dear {{$name}},<br><br>

This email is to inform you that you have been removed from the {{$facility}} facility by {{$by}}.<br>
<br>
The following is the reason for your removal:<br><br>
<em>{{$msg}}</em>

@if($obsInactive)
    <br><br>
    Thank you for taking a step towards becoming a controller on VATSIM. To improve our onboarding process, please take a short survey about your experience. Your responses will remain anonymous.
    <br>
    <a href="https://form.jotform.com/80467151384155">https://form.jotform.com/80467151384155</a>
@endif

<br><br>
In an effort to better serve our controllers, we would appreciate if you could take a few minutes to complete an anonymous survey regarding your experience at {{$facility}}.
The survey link can be found here: https://form.jotform.com/80467151384155
<br><br>
If you have any questions regarding your removal, please contact {{$facid}}-atm@vatusa.net and/or vatusa{{$region}}@vatusa.net.<br>
<br>
Regards,<br>
VATUSA Data Services
