<div class="top-down">
    <div class="heart">
        <span>
            <a target="_blank" href="https://www.facebook.com/messages/t/1000442874950">
                <i class="fab fa-facebook-messenger"></i>
            </a>
        </span>
    </div>
    <div class="heart">
        <span>
            <a class="zalo" target="_blank" href="https://zalo.me/0983861384">
                Zalo
            </a>
        </span>
    </div>
    <div class="heart">
        <span>
            <a href="tel:0983861384"> <i class="fal fa-phone"></i></a>
            <p></p>
        </span>
    </div>
</div>



<a href="#" class="top-item button-to-top" id="bottom_to_top" style="bottom: 30px;">
    <i class="fal fa-chevron-up"></i>
</a>

<style>
    .top-down {
        position: fixed;
        bottom: 70px;
        right: 30px;
        z-index: 999;
    }

    @keyframes beat {


        0% {
            transform: scale(1);
        }



        50% {
            transform: scale(1.2);
        }


    }

    .heart {
        position: relative;
        width: 40px;
        height: 40px;
        background: linear-gradient(to bottom, #d84d52, #c74449);
        margin-bottom: 25px;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        cursor: pointer;
        box-shadow: 0px 7px 20px rgba(0, 0, 0, .2);
        animation: beat 1.5s ease 0s infinite;

    }

    i {
        text-decoration: none;
        list-style: none;

    }

    a {
        color: #fff;
        text-decoration: none;
    }

    a:hover {
        color: #fff;
        text-decoration: none;
    }

    .button-to-top {
        transition: 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        z-index: 10;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: transparent;
        border: 2px solid #c1272d;
        color: #c1272d;
        right: 30px;

    }

    .button-to-top:hover {
        background: #c1272d;
        color: #fff;
    }

    .heart:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #c1272d;
        opacity: .4;
        border-radius: inherit;
    }

    .heart:after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #c1272d;
        opacity: .4;
        border-radius: inherit;
    }

    @keyframes beat-before {


        0% {
            transform: scale(1);
        }



        60% {
            transform: scale(1.2);
        }


    }

    .heart:before {
        z-index: -2;
        animation: beat-before 1.5s ease 100ms infinite;
    }

    @keyframes beat-after {


        0% {
            transform: scale(1);
        }



        100% {
            transform: scale(1.8);
        }


    }

    .heart:after {
        z-index: -1;
        animation: beat-after 1.5s ease 200ms infinite;
    }
</style>