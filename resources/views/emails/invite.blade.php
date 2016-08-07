@extends('emails.base')

@section('content')
    You've requested to get into iridium. Here is your link!
    <br><br>
    <table cellspacing="0" cellpadding="0" border="0" align="left" style="margin: auto;">
        <tr>
            <td style="border-radius: 3px; background: #5F5F5F; text-align: left;"
                class="button-td">
                <a href="{{ url('/get-in/' . $token) }}"
                   style="background: #5F5F5F; border: 15px solid #5F5F5F; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: left; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;"
                   class="button-a">
                    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ffffff">GET IN</span>&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
            </td>
        </tr>
    </table>
@stop