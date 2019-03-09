<footer class="footer">
        {{-- <p>{{Auth::user()->id}}</p> --}}
        <p>河北淘车乐二手车&nbsp;&nbsp;@if(isset(Auth::user()->id))[已授权]:{{Auth::user()->nick_name}}@endif</p>
        <div class="phone">
            <span>服务电话:
            <a class="testCountPhone"
               data-phone="4006706969"
               href="tel:4006706969">
                4006706969            </a>
        </span>&nbsp;&nbsp;
            <span>售后服务专线:
            <a class="testCountPhone"
               data-phone="4006706969"
               href="tel:4006706969">
                4006706969            </a>
        </span>
        </div>
        <div class="company">河北淘车乐二手车交易有限公司</div>
        <div class="company">冀ICP备16003677号-1</div>
</footer>