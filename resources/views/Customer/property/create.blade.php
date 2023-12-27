@extends('layouts.app', [
    'title' => 'Topside Facilities Management - property',
])

@section('content')
    <!-- dashboard screen start -->
    <aside class="app-sidebar">
        <div id="close"><a href="javascript:void(0)"><i class="fa-regular fa-xmark"></i></a></div>
        <div class="profile-header">
            <a href="#"><img src="{{ URL::asset('img/logo/logo.svg') }}" alt="user" /></a>
        </div>
        <nav class="sidebar-nav">
            <ul class="list-inline">
                <li class="">
                    <a href="{{ route('user.property.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                            fill="none">
                            <g clip-path="url(#clip0_103_1106)">
                                <path
                                    d="M10.0083 20.0004C6.93866 20.0004 3.87455 20.0004 0.804885 20.0004C0.249792 20.0004 0.00555093 19.7556 0.00555093 19.2049C0.00555093 15.5109 0.00555093 11.8224 0 8.12839C0 7.81684 0.111019 7.58875 0.35526 7.3996C3.38052 5.02408 6.40022 2.64856 9.41993 0.278597C9.88621 -0.0885794 10.1082 -0.0885794 10.5801 0.28416C13.5831 2.64856 16.5862 5.01295 19.6003 7.36622C19.8779 7.58319 20 7.82797 20 8.17846C19.9944 11.8502 19.9944 15.522 19.9944 19.1938C19.9944 19.7612 19.7558 20.006 19.1896 20.006C16.1255 20.0004 13.0669 20.0004 10.0083 20.0004ZM18.6622 18.6597C18.6622 18.5707 18.6622 18.4928 18.6622 18.4205C18.6622 15.1326 18.6622 11.8391 18.6678 8.5512C18.6678 8.3843 18.6123 8.28972 18.4846 8.18958C15.7036 6.00878 12.9281 3.82241 10.1582 1.63604C10.0361 1.5359 9.95837 1.54703 9.8418 1.6416C7.06078 3.83353 4.27977 6.0199 1.4932 8.20071C1.37663 8.28972 1.33222 8.37874 1.33222 8.52894C1.33777 11.8335 1.33777 15.1381 1.33777 18.4427C1.33777 18.515 1.33777 18.5874 1.33777 18.6597C2.90869 18.6597 4.44629 18.6597 6.00056 18.6597C6.00056 18.5651 6.00056 18.4872 6.00056 18.4038C6.00056 16.1061 6.00056 13.8085 6.00056 11.5109C6.00056 10.2369 6.89981 9.34118 8.17652 9.34118C9.39772 9.34118 10.6189 9.33562 11.8401 9.34118C12.0344 9.34118 12.2287 9.36344 12.4174 9.40794C13.3722 9.64716 13.9939 10.4594 13.9939 11.4719C13.9994 13.7807 13.9939 16.095 13.9939 18.4038C13.9939 18.4872 13.9939 18.5651 13.9939 18.6597C15.5537 18.6597 17.0969 18.6597 18.6622 18.6597ZM12.6672 18.6597C12.6672 18.5762 12.6672 18.515 12.6672 18.4538C12.6672 16.1451 12.6672 13.8308 12.6672 11.522C12.6672 10.9712 12.3675 10.6708 11.8179 10.6708C10.6134 10.6708 9.40328 10.6708 8.19872 10.6708C7.63253 10.6708 7.33833 10.9657 7.33833 11.5276C7.33833 13.8308 7.33833 16.1339 7.33833 18.4371C7.33833 18.5095 7.33833 18.5818 7.33833 18.6597C9.12018 18.6597 10.8798 18.6597 12.6672 18.6597Z"
                                    fill="#636363" />
                                <path
                                    d="M9.99726 6.00391C10.8577 6.00391 11.718 6.00391 12.5784 6.00391C13.0225 6.00391 13.3278 6.27094 13.3278 6.66594C13.3334 7.06093 13.0281 7.33909 12.5895 7.33909C10.8632 7.33909 9.13131 7.33909 7.40497 7.33909C6.96645 7.33909 6.66115 7.06093 6.6667 6.66594C6.67225 6.27094 6.972 6.00391 7.41608 6.00391C8.27647 6.00391 9.13686 6.00391 9.99726 6.00391Z"
                                    fill="#636363" />
                            </g>
                            <defs>
                                <clipPath id="clip0_103_1106">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        My Properties
                    </a>
                </li>
                <li class="active">
                    <a href="{{ route('user.property.create') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="20" viewBox="0 0 27 20"
                            fill="none">
                            <g clip-path="url(#clip0_103_1094)">
                                <path
                                    d="M0 16.3902C0.21135 15.3179 1.15582 15.0515 1.9748 14.6186C1.41341 14.3522 0.937867 14.0392 0.581213 13.5664C0.455724 13.3999 0.376468 13.2334 0.462329 13.0269C0.719912 12.3942 0.739726 11.7149 0.785959 11.0489C0.832192 10.4029 0.818982 9.75018 0.951076 9.12414C1.45303 6.79314 4.00245 5.68091 5.93762 6.93966C6.90851 7.57236 7.41707 8.51142 7.52935 9.65694C7.60861 10.4695 7.62842 11.282 7.70108 12.0945C7.7275 12.3875 7.81996 12.6806 7.91243 12.967C7.99168 13.2067 7.95205 13.3932 7.80675 13.5863C7.4501 14.0459 6.99437 14.3589 6.45279 14.612C6.64432 14.7851 6.78963 14.8051 7.034 14.6986C7.74731 14.3855 8.48704 14.1325 9.22016 13.8594C9.47114 13.7662 9.74193 13.7262 9.82118 13.3932C9.841 13.3133 9.94667 13.2467 10.0127 13.1734C10.158 13.0202 10.3033 12.8671 10.4486 12.7072C10.627 12.5074 10.627 11.2953 10.4354 11.1155C9.40509 10.1431 8.88992 8.931 8.88332 7.51908C8.87671 6.94632 8.75783 6.41352 8.62573 5.86074C8.34173 4.62197 8.26908 3.35657 8.84369 2.17109C9.48434 0.85241 10.5675 0.0931692 12.0139 0.0398891C14.0416 -0.026711 16.0758 0.0132491 18.1035 0.0199091C18.3941 0.0199091 18.5526 0.173089 18.5526 0.46613C18.5526 1.95797 18.5592 3.44315 18.5328 4.93499C18.5262 5.30795 18.4667 5.70756 18.328 6.05388C18.1299 6.54006 18.1299 7.0329 18.1299 7.53906C18.1299 8.33826 18.0044 9.12414 17.5949 9.81012C17.3175 10.2763 16.9609 10.6959 16.6108 11.1088C16.4985 11.242 16.4193 11.3486 16.4391 11.5217C16.4391 11.5417 16.4391 11.555 16.4391 11.575C16.3268 12.2743 16.5051 12.8604 17.093 13.2866C17.1194 13.3066 17.159 13.3333 17.1656 13.3666C17.2515 13.7528 17.5949 13.7795 17.8789 13.8927C18.3545 14.0725 18.83 14.259 19.3121 14.4122C19.4839 14.4655 19.682 14.4455 19.8669 14.4322C19.9858 14.4255 20.1047 14.3656 20.2236 14.3323C20.7387 14.1857 20.7454 14.1857 20.7123 13.6463C20.7057 13.5597 20.6595 13.4531 20.6 13.4065C19.8075 12.7339 19.4244 11.8747 19.4574 10.8424C19.4706 10.4961 19.3782 10.1897 19.2329 9.87672C18.5658 8.41152 19.6424 6.54672 21.2407 6.4668C22.5815 6.4002 23.9288 6.42684 25.2696 6.42018C25.547 6.42018 25.7253 6.55338 25.7253 6.7998C25.7319 7.61232 25.7253 8.4315 25.6923 9.24402C25.6857 9.47712 25.5998 9.71688 25.4941 9.92334C25.3422 10.2164 25.3026 10.5161 25.3092 10.8424C25.3422 11.888 24.9922 12.7672 24.16 13.4265C23.9354 13.6063 24.0609 13.8594 24.0675 14.0725C24.0675 14.1458 24.2392 14.2457 24.3515 14.279C24.8205 14.4255 25.296 14.552 25.7649 14.6986C26.5509 14.945 27 15.551 27 16.3769C27.0066 17.4292 27.0066 18.4881 27 19.5404C27 19.8334 26.8415 20.0133 26.6037 20.0133C26.3726 20.0133 26.2206 19.8334 26.2074 19.5404C26.2074 19.4804 26.2074 19.4138 26.2074 19.3539C26.2074 18.4148 26.2074 17.4758 26.2074 16.5367C26.2074 15.8641 26.0093 15.591 25.3686 15.4045C24.8865 15.2647 24.411 15.1181 23.9222 14.9983C23.843 14.9783 23.7373 15.0316 23.6514 15.0582C23.6316 15.0649 23.6118 15.0915 23.592 15.1115C23.3212 15.3912 22.9513 15.6243 22.8126 15.9573C22.6739 16.2836 22.773 16.7099 22.773 17.0895C22.773 17.8687 22.773 18.6479 22.773 19.4272C22.773 19.5204 22.7664 19.6203 22.7466 19.7135C22.6937 19.9133 22.5484 20.0132 22.3569 19.9999C22.1522 19.9866 22.0135 19.8601 21.9936 19.6469C21.9804 19.4738 21.987 19.294 21.987 19.1141C21.987 18.1684 21.9804 17.216 21.9936 16.2703C21.9936 16.0439 21.954 15.8641 21.7691 15.7175C21.5974 15.571 21.4455 15.3979 21.2803 15.2314C20.9633 14.9117 20.9633 14.9117 20.534 15.0915C20.6199 15.2114 20.7057 15.3246 20.785 15.4511C20.9963 15.7975 21.0954 16.1837 21.0954 16.59C21.102 17.5624 21.1086 18.5414 21.0888 19.5137C21.0888 19.6669 20.9831 19.8468 20.8642 19.9466C20.7916 20.0066 20.5604 19.9933 20.4878 19.92C20.3821 19.8201 20.316 19.6336 20.3094 19.4804C20.2962 18.548 20.3028 17.6223 20.3028 16.6899C20.3028 15.944 20.0122 15.5244 19.3121 15.2647C18.513 14.9716 17.7138 14.6786 16.8816 14.3722C16.6901 14.6586 16.4985 14.9516 16.3004 15.2447C16.1419 15.4778 15.99 15.7175 15.8315 15.9506C15.488 16.4368 14.9464 16.4901 14.5171 16.0838C14.3256 15.8974 14.1539 15.7042 13.9161 15.4511C13.9095 15.6243 13.8963 15.7175 13.8963 15.8108C13.8963 17.0096 13.8963 18.2017 13.8963 19.4005C13.8963 19.8201 13.7576 20.0266 13.4868 20.0133C13.2226 19.9999 13.1103 19.8134 13.1103 19.3939C13.1103 18.2084 13.1103 17.0162 13.1103 15.8308C13.1103 15.7375 13.1103 15.6376 13.1103 15.4578C12.8858 15.6842 12.7206 15.8507 12.5489 16.0239C12.047 16.5234 11.512 16.4701 11.1157 15.8774C10.7855 15.3845 10.4618 14.8917 10.125 14.3789C9.4183 14.6386 8.7182 14.8917 8.02471 15.1448C6.87549 15.571 6.70377 15.8174 6.70377 17.0562C6.70377 17.8354 6.70377 18.6146 6.70377 19.3939C6.70377 19.4804 6.70377 19.5737 6.69716 19.6603C6.67074 19.8734 6.53205 19.9933 6.3273 20.0066C6.13576 20.0132 5.99046 19.9067 5.94423 19.7069C5.92441 19.6136 5.91781 19.5138 5.91781 19.4205C5.91781 18.588 5.91781 17.7555 5.91781 16.923C5.91781 16.1971 5.94423 16.0772 6.20842 15.4578C5.84516 15.1714 5.84516 15.1714 5.52813 15.4844C4.82143 16.1638 4.0751 16.3103 3.36179 15.8774C3.12402 15.7309 2.93249 15.5111 2.70793 15.3446C2.64188 15.298 2.51639 15.2713 2.44374 15.3046C2.06727 15.4778 1.70401 15.6709 1.33415 15.8574C0.957681 16.0439 0.779354 16.3502 0.785959 16.7765C0.792564 17.6956 0.792564 18.6213 0.785959 19.5404C0.785959 19.8667 0.574609 20.0798 0.32363 19.9999C0.204746 19.96 0.105675 19.8401 0 19.7602C0 18.6213 0 17.5091 0 16.3902ZM17.7336 0.83243C17.7138 0.82577 17.6874 0.81245 17.6676 0.81245C15.7984 0.81245 13.9227 0.78581 12.0536 0.82577C10.7458 0.85907 9.61644 1.83143 9.34565 3.11681C9.15411 4.03589 9.1409 4.98161 9.45793 5.87406C9.62965 6.3669 9.66928 6.84642 9.66928 7.35258C9.66267 8.02524 9.78156 8.67126 10.0656 9.28398C10.7657 10.7958 12.2451 11.6416 13.9491 11.4951C15.4484 11.3686 16.8354 10.1831 17.192 8.64462C17.3307 8.0319 17.2911 7.37922 17.3439 6.74652C17.3571 6.5667 17.3968 6.38022 17.443 6.20706C17.5421 5.78082 17.7204 5.35458 17.7336 4.92167C17.7732 3.57635 17.7534 2.23103 17.76 0.88571C17.76 0.86573 17.7468 0.85241 17.7336 0.83243ZM24.9459 7.22604C24.8667 7.21938 24.8138 7.20606 24.7676 7.20606C23.7109 7.20606 22.6607 7.1994 21.604 7.20606C21.4388 7.20606 21.2671 7.22604 21.1086 7.266C20.0519 7.52574 19.4839 8.75784 20.0254 9.6969C20.184 9.96996 20.2434 10.263 20.25 10.5827C20.2566 10.9623 20.2632 11.3552 20.3755 11.7082C20.6727 12.6007 21.3068 13.1201 22.2512 13.22C23.0042 13.3 23.843 12.8338 24.2458 12.1211C24.5166 11.635 24.5298 11.1088 24.5298 10.576C24.5298 10.3829 24.5034 10.1564 24.5959 10.0033C25.1177 9.1308 24.8865 8.17176 24.9459 7.22604ZM1.61815 10.6626C1.9682 10.6959 2.07387 10.9157 2.07387 11.2287C2.07387 11.2753 2.08708 11.3153 2.09369 11.3619C2.19276 12.301 3.01835 13.1468 4.05528 13.22C4.96673 13.2866 5.88478 12.7072 6.21502 11.8081C6.31409 11.5284 6.30088 11.2953 6.11595 11.0422C5.60739 10.3429 4.89408 10.0166 4.0817 9.83676C3.69203 9.75018 3.3816 9.80346 3.15044 10.1564C3.0976 10.2364 3.01835 10.303 2.9523 10.3696C2.76737 10.5427 2.54281 10.556 2.3843 10.4162C2.21918 10.263 2.21257 10.0166 2.3843 9.82344C2.59565 9.59034 2.8136 9.35058 3.04477 9.13746C3.13063 9.05754 3.27593 8.99094 3.39481 8.99094C4.20059 8.9976 4.97334 9.15744 5.65362 9.597C6.06311 9.8634 6.42637 10.2097 6.78302 10.4961C6.86888 9.64362 6.6047 8.74452 6.0433 8.0652C5.23092 7.08618 3.64579 6.95298 2.6749 7.7655C1.76345 8.51808 1.59173 9.54372 1.61815 10.6626ZM11.3601 11.7881C11.3601 12.0146 11.3469 12.1877 11.3667 12.3609C11.3799 12.4541 11.4327 12.5674 11.5054 12.614C12.1196 13.0535 12.7471 13.4798 13.3745 13.8994C13.4406 13.9393 13.5793 13.9393 13.6387 13.8994C14.2661 13.4798 14.8936 13.0469 15.5078 12.614C15.5805 12.5607 15.6333 12.4475 15.6465 12.3609C15.6663 12.1877 15.6531 12.0146 15.6531 11.8015C14.2133 12.4874 12.8131 12.5008 11.3601 11.7881ZM15.1512 15.5377C15.4748 15.0515 15.7918 14.572 16.1023 14.0992C16.3929 13.6596 16.3929 13.6596 16.0164 13.3C16.0032 13.2866 15.9834 13.2933 15.9503 13.28C15.3493 13.6929 14.7417 14.1125 14.1539 14.5187C14.4907 14.8651 14.8143 15.1914 15.1512 15.5377ZM12.8659 14.5254C12.2649 14.1058 11.6507 13.6862 10.9968 13.24C10.9308 13.3266 10.8845 13.4198 10.8119 13.4731C10.627 13.613 10.6534 13.7395 10.7789 13.9127C11.0431 14.279 11.2808 14.6586 11.5252 15.0316C11.6375 15.2047 11.7564 15.3712 11.8686 15.5377C12.2055 15.1914 12.5291 14.8651 12.8659 14.5254ZM3.34198 13.9793C3.30235 14.4188 3.18346 14.905 3.75147 15.1781C4.0817 15.3379 4.37891 15.3246 4.70254 15.1514C5.26394 14.8584 5.09883 14.3855 5.05259 13.9726C4.48459 13.9793 3.91659 13.9793 3.34198 13.9793ZM22.3635 15.2247C22.6211 14.9583 22.8258 14.7252 23.057 14.5254C23.2551 14.3522 23.3146 14.1658 23.2287 13.9327C22.9447 13.966 22.6739 14.0259 22.3965 14.0259C22.1125 14.0259 21.8285 13.966 21.4983 13.9193C21.5115 14.0659 21.4785 14.2523 21.5577 14.3522C21.7889 14.6519 22.0729 14.9183 22.3635 15.2247ZM2.51639 13.9593C2.56262 13.6862 2.54941 13.4798 2.29843 13.3C2.1135 13.1734 1.9748 12.9803 1.83611 12.8005C1.71062 12.6406 1.61155 12.4541 1.49927 12.2677C1.43322 12.5407 1.36057 12.7871 1.31433 13.0402C1.30113 13.1135 1.32754 13.2134 1.37378 13.2667C1.6908 13.5997 2.07387 13.8128 2.51639 13.9593ZM5.88478 13.966C6.3339 13.8128 6.71698 13.5997 7.034 13.2667C7.07363 13.2267 7.11986 13.1601 7.11326 13.1135C7.05382 12.8404 6.97456 12.5674 6.91512 12.3409C6.65093 12.6606 6.41316 13.0136 6.10934 13.2933C5.89799 13.4864 5.81874 13.6663 5.88478 13.966Z"
                                    fill="#636363" />
                                <path
                                    d="M25.3092 18.3214C25.3092 18.721 25.3158 19.114 25.3092 19.5136C25.3025 19.8133 25.144 20.0064 24.9063 19.9998C24.6751 19.9931 24.5232 19.8133 24.5232 19.5202C24.5232 18.7277 24.5232 17.9285 24.5232 17.1359C24.5232 16.8296 24.6817 16.6498 24.9261 16.6564C25.1638 16.6631 25.3092 16.8362 25.3158 17.1293C25.3158 17.5222 25.3092 17.9218 25.3092 18.3214Z"
                                    fill="#636363" />
                                <path
                                    d="M2.48342 18.6069C2.48342 18.9066 2.48342 19.2063 2.48342 19.506C2.48342 19.8123 2.3249 19.9988 2.08714 19.9988C1.85597 19.9988 1.69746 19.8123 1.69746 19.526C1.69085 18.8999 1.69085 18.2672 1.69746 17.6412C1.69746 17.3548 1.86258 17.1816 2.10034 17.1816C2.33811 17.1816 2.48342 17.3548 2.49002 17.6478C2.48342 17.9675 2.48342 18.2872 2.48342 18.6069Z"
                                    fill="#636363" />
                                <path
                                    d="M17.7666 18.7485C17.7666 18.4821 17.76 18.2157 17.7666 17.9493C17.7732 17.6763 17.9251 17.5098 18.1563 17.5098C18.3808 17.5098 18.546 17.6763 18.5526 17.9493C18.5592 18.4888 18.5592 19.0282 18.5526 19.5677C18.546 19.8341 18.3676 20.0073 18.1431 20.0006C17.9185 19.9939 17.7732 19.8208 17.7666 19.5477C17.76 19.2747 17.7666 19.0083 17.7666 18.7485Z"
                                    fill="#636363" />
                                <path
                                    d="M9.23994 18.7601C9.23994 19.0332 9.24655 19.3062 9.23994 19.5859C9.23334 19.8257 9.10785 19.9656 8.87669 19.9989C8.67194 20.0255 8.4738 19.8523 8.46059 19.6059C8.44738 19.0398 8.44738 18.4737 8.46059 17.9076C8.4672 17.6545 8.64552 17.5014 8.86348 17.508C9.08143 17.5147 9.22673 17.6745 9.23994 17.9343C9.24655 18.2073 9.23994 18.4804 9.23994 18.7601Z"
                                    fill="#636363" />
                                <path
                                    d="M10.9374 4.58772C10.9374 4.88742 10.944 5.16048 10.9374 5.43354C10.9308 5.75322 10.7855 5.91972 10.5345 5.91972C10.2967 5.91306 10.1514 5.75322 10.1448 5.44686C10.1382 5.14716 10.1316 4.84746 10.158 4.54776C10.1845 4.16148 10.4552 3.85512 10.8317 3.80184C12.1791 3.60204 13.5264 3.54876 14.8606 3.85512C15.5475 4.0083 16.1815 4.28802 16.6967 4.78752C16.8816 4.96734 16.9014 5.18046 16.7693 5.35362C16.6306 5.52678 16.3929 5.56008 16.2079 5.39358C15.4616 4.72092 14.5502 4.55442 13.6057 4.4745C12.7207 4.39458 11.8488 4.46118 10.9374 4.58772Z"
                                    fill="#636363" />
                                <path
                                    d="M24.0345 9.26455C24.0411 9.61754 23.8034 9.83065 23.5524 9.73741C22.7532 9.43771 21.9144 9.38443 21.0756 9.33115C20.8511 9.31783 20.7256 9.17797 20.719 8.95153C20.7124 8.73175 20.8577 8.55859 21.0954 8.55859C22.0003 8.56525 22.8985 8.62519 23.7439 8.99815C23.8826 9.05143 23.9751 9.20461 24.0345 9.26455Z"
                                    fill="#636363" />
                            </g>
                            <defs>
                                <clipPath id="clip0_103_1094">
                                    <rect width="27" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        Add Property
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                            fill="none">
                            <g clip-path="url(#clip0_103_1080)">
                                <path
                                    d="M20 1.409C19.9726 1.33072 19.9491 1.25245 19.9218 1.17417C19.7066 0.481409 19.0612 0 18.3376 0C15.2278 0 12.1181 0 9.01231 0C7.68628 0 6.68882 0.994129 6.681 2.31703C6.67317 3.55382 6.67709 4.79061 6.681 6.0274C6.681 6.33268 6.86093 6.56751 7.12692 6.64188C7.39291 6.71624 7.68628 6.61839 7.81927 6.37573C7.88968 6.24657 7.92097 6.07828 7.92488 5.92955C7.93271 4.7593 7.94836 3.58513 7.92097 2.41487C7.90533 1.67906 8.45295 1.23679 9.08272 1.24462C10.7295 1.26419 12.3763 1.25245 14.0192 1.25245C14.0778 1.25245 14.1365 1.25245 14.1952 1.25245C14.1991 1.26419 14.1991 1.27202 14.203 1.28376C13.7453 1.4364 13.2877 1.58513 12.83 1.7456C12.2159 1.96086 11.8365 2.39139 11.7035 3.02935C11.6722 3.182 11.6761 3.33855 11.6761 3.49511C11.6761 7.65558 11.6761 11.8121 11.6761 15.9726C11.6761 16.0548 11.6761 16.1409 11.6761 16.2427C11.6018 16.2466 11.5392 16.2544 11.4766 16.2544C10.663 16.2544 9.84939 16.2544 9.03578 16.2544C8.35907 16.2544 7.9288 15.8239 7.9288 15.1429C7.92489 13.9374 7.9288 12.7358 7.9288 11.5303C7.9288 11.0528 7.56502 10.7515 7.14257 10.8611C6.89222 10.9276 6.70447 11.1468 6.68491 11.4051C6.681 11.456 6.681 11.5108 6.681 11.5616C6.681 12.7593 6.67709 13.9569 6.681 15.1546C6.68491 16.5127 7.67845 17.499 9.03969 17.5029C9.84157 17.5029 10.6395 17.5029 11.4414 17.5029C11.5118 17.5029 11.5822 17.5029 11.68 17.5029C11.68 17.7378 11.68 17.9569 11.68 18.1761C11.68 19.1624 12.1142 19.7221 13.0647 19.9804C13.0765 19.9843 13.0843 19.9961 13.096 20.0039C13.2642 20.0039 13.4324 20.0039 13.6045 20.0039C13.7219 19.9687 13.8392 19.9335 13.9527 19.8943C15.5721 19.3581 17.1876 18.8219 18.807 18.2779C19.4328 18.0665 19.8318 17.6399 19.9765 16.9863C19.9804 16.9628 19.9961 16.9393 20.0078 16.9159C20 11.7456 20 6.57534 20 1.409ZM12.9239 10.8415C12.9239 8.37965 12.9239 5.92172 12.9239 3.45988C12.9239 3.10372 12.9982 3.00196 13.3307 2.88845C14.9149 2.36399 16.4991 1.83562 18.0794 1.30724C18.5097 1.16243 18.7483 1.33464 18.7483 1.78865C18.7483 6.70841 18.7483 11.6282 18.7483 16.5479C18.7483 16.8845 18.6661 16.998 18.3493 17.1037C17.7782 17.2955 17.2032 17.4873 16.6321 17.6751C15.5955 18.0196 14.5629 18.3679 13.5263 18.7084C13.1782 18.8219 12.9317 18.6419 12.9239 18.2779C12.9239 18.2192 12.9239 18.1605 12.9239 18.1018C12.9239 15.683 12.9239 13.2642 12.9239 10.8415Z"
                                    fill="#636363" />
                                <path
                                    d="M2.15131 9.37684C2.6872 9.37684 3.17615 9.37684 3.66119 9.37684C5.27277 9.37684 6.88826 9.37684 8.49984 9.37684C8.96141 9.37684 9.26651 8.98937 9.14134 8.57058C9.05919 8.29661 8.82059 8.12831 8.49984 8.12831C7.40068 8.12831 6.30152 8.12831 5.20236 8.12831C4.20099 8.12831 3.19962 8.12831 2.15131 8.12831C2.21781 8.05395 2.26084 8.00698 2.30778 7.96001C2.93363 7.33379 3.55949 6.70757 4.18143 6.08134C4.38875 5.87391 4.43177 5.60776 4.31834 5.3651C4.20881 5.13027 3.95847 4.9698 3.70031 5.01285C3.5634 5.03633 3.40694 5.10287 3.30915 5.20072C2.26084 6.23399 1.22035 7.27117 0.183779 8.31618C-0.0665636 8.56667 -0.0665636 8.9424 0.179867 9.19289C1.22035 10.2379 2.26866 11.2829 3.31697 12.324C3.57122 12.5745 3.95065 12.5667 4.19317 12.324C4.44351 12.0735 4.44351 11.6939 4.18534 11.4316C3.56731 10.8054 2.94537 10.187 2.32342 9.56471C2.2804 9.50991 2.23346 9.45903 2.15131 9.37684Z"
                                    fill="#636363" />
                            </g>
                            <defs>
                                <clipPath id="clip0_103_1080">
                                    <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)" />
                                </clipPath>
                            </defs>
                        </svg>
                        logout
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="main-content app-content">
        <!-- Header section start -->
        <div class="top-header">
            <div class="sidemenu-toggle">
                <a href="javascript:void(0)" id="menu-toggle">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1" width="44" height="44" rx="9" fill="#4DA6FF" fill-opacity="0.15"
                            stroke="#4DA6FF" stroke-width="2"></rect>
                        <rect x="13" y="14" width="10" height="3" rx="1.5" fill="#4DA6FF"></rect>
                        <rect x="13" y="21" width="20" height="3" rx="1.5" fill="#4DA6FF"></rect>
                        <rect x="23" y="28" width="10" height="3" rx="1.5" fill="#4DA6FF"></rect>
                    </svg>
                </a>
            </div>
            <div class="title-header ms-4">
                <h2>Add Property</h2>
            </div>
            <div class="right-content">
                <form class="search-property position-relative me-3" action="" id="">
                    <input type="text" placeholder="Search Property..." class="form-control" />
                    <span class="search-svg"><img src="{{ URL::asset('img/home/search.svg') }}"></span>
                </form>
                <div class="action-button">
                    <a href="#" class="me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                            fill="none">
                            <rect width="48" height="48" rx="10" fill="#389BFE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M24.5 29.8476C30.1392 29.8476 32.7481 29.1242 33 26.2205C33 23.3188 31.1812 23.5054 31.1812 19.9451C31.1812 17.1641 28.5452 14 24.5 14C20.4548 14 17.8188 17.1641 17.8188 19.9451C17.8188 23.5054 16 23.3188 16 26.2205C16.253 29.1352 18.8618 29.8476 24.5 29.8476Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path opacity="0.4" d="M26.8889 32.8574C25.5247 34.3721 23.3967 34.3901 22.0195 32.8574"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                            fill="none">
                            <rect width="48.0001" height="48" rx="10" fill="#389BFE" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M24.0008 27.6172C19.6854 27.6172 16.0002 28.2526 16.0002 30.7973C16.0002 33.342 19.6621 34.0002 24.0008 34.0002C28.3161 34.0002 32.0002 33.3638 32.0002 30.8201C32.0002 28.2764 28.3395 27.6172 24.0008 27.6172Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                d="M24.0008 23.9874C26.8327 23.9874 29.128 21.7511 29.128 18.9932C29.128 16.2353 26.8327 14 24.0008 14C21.1689 14 18.8726 16.2353 18.8726 18.9932C18.863 21.7418 21.1434 23.9781 23.9647 23.9874H24.0008Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Header section end -->

        <!-- Add Property section start  -->
        <section class="add-property-section">
            <div class="container-fluid">
                {{ Form::open(['url' => route('user.property.store'), 'method' => 'POST', 'files' => true, 'class' => 'PropertyForm']) }}
                <div class="row">
                    @include('Customer.property.form')
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
        <!-- Add Property section end  -->

    </div>
@endsection
