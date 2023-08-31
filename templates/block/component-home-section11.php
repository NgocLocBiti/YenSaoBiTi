<section class="section11">
    <div class="section11-benner">
        <div class="benner-wrap">
            <div class="contenner">
                <div class="content">
                    <div class="form">
                        <form action="">
                            <label for="">
                                <span>
                                    <input type="text" placeholder="Nhập email của bạn tại đây">
                                </span>
                            </label>
                            <input type="submit" value="Gửi" class="wpcf7-form-control has-spinner wpcf7-submit btn-cus-nvt">
                        </form>
                    </div>
                    <div class="countdown">
                        <div class="container-timer">
                            <div id="countdown">
                                <ul>
                                    <li><span id="days">0</span>Ngày</li>
                                    <li><span id="hours">0</span>giờ</li>
                                    <li><span id="minutes">0</span>phút</li>
                                    <li><span id="seconds">0</span>giây</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const endTime = '2024-01-01 00:00:00';

    function updateCountdown() {
        const now = new Date().getTime();
        const targetTime = new Date(endTime).getTime();
        const timeDifference = targetTime - now;

        const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        document.getElementById('days').textContent = days;
        document.getElementById('hours').textContent = hours;
        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;
    }

    // Cập nhật đếm ngược mỗi giây
    setInterval(updateCountdown, 1000);
    updateCountdown(); // Cập nhật lần đầu
</script>