<div class="d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <?php $this->load->view("member/header"); ?>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 menus-list-app mb-4">
                        <div class="col-12 text-center">
                            <a href="<?= base_url() ?>swap"
                                class="d-flex flex-column justify-content-center align-items-center py-2 my-3 menus-blue">
                                <div class="d-flex flex-column">
                                    <svg width="58" height="57" viewBox="0 0 58 57" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M38.3665 55.8201C37.7301 55.8201 37.1408 55.4707 36.8344 54.9349C36.5279 54.3991 36.528 53.7234 36.858 53.1876L39.333 49.1106C39.828 48.2719 40.9123 48.0157 41.7609 48.5049C42.6095 48.9941 42.8688 50.0657 42.3738 50.9044L41.7373 51.9528C48.2431 50.4385 53.1225 44.6608 53.1225 37.7649C53.1225 36.8097 53.9239 36.0176 54.8904 36.0176C55.8568 36.0176 56.6583 36.8097 56.6583 37.7649C56.6347 47.7127 48.4317 55.8201 38.3665 55.8201Z"
                                            fill="" />
                                        <path
                                            d="M3.00812 20.8747C2.04167 20.8747 1.24023 20.0826 1.24023 19.1275C1.24023 9.17963 9.44321 1.07227 19.5084 1.07227C20.1448 1.07227 20.7341 1.42173 21.0405 1.95756C21.347 2.4934 21.347 3.16901 21.017 3.70484L18.5419 7.78182C18.0469 8.62051 16.9626 8.8768 16.114 8.38757C15.2654 7.89833 15.0062 6.82674 15.5012 5.98805L16.1376 4.93965C9.63179 6.45396 4.75243 12.2315 4.75243 19.1275C4.77601 20.0826 3.97456 20.8747 3.00812 20.8747Z"
                                            fill="" />
                                        <path
                                            d="M21.088 52.3955C12.0836 52.3955 4.77637 45.1502 4.77637 36.274C4.77637 27.3978 12.1072 20.1523 21.088 20.1523C21.5123 20.1523 21.8895 20.1757 22.3138 20.199C30.3046 20.8047 36.7633 27.1881 37.3526 35.0392C37.3761 35.5517 37.3997 35.9012 37.3997 36.274C37.4233 45.1502 30.0925 52.3955 21.088 52.3955ZM21.088 23.6237C14.0401 23.6237 8.31213 29.2849 8.31213 36.2507C8.31213 43.2165 14.0401 48.8776 21.088 48.8776C28.136 48.8776 33.8875 43.2165 33.8875 36.2507C33.8875 35.9478 33.8639 35.6449 33.8404 35.3421C33.3689 29.0984 28.301 24.1128 22.0781 23.6469C21.7716 23.6469 21.4416 23.6237 21.088 23.6237Z"
                                            fill="" />
                                        <path
                                            d="M36.7873 36.9027H35.6322C34.7129 36.9027 33.9351 36.2038 33.8644 35.2952C33.3929 29.1215 28.3486 24.1359 22.102 23.67C21.1827 23.6001 20.4756 22.8313 20.4756 21.9227V20.7812C20.4756 11.8817 27.8064 4.65967 36.8108 4.65967C45.8152 4.65967 53.1225 11.905 53.1225 20.7812C53.1225 29.6573 45.7681 36.9027 36.7873 36.9027ZM23.9878 20.3852C30.635 21.5733 35.9622 26.8151 37.1644 33.4081C44.0474 33.1985 49.5632 27.6072 49.5632 20.7812C49.5632 13.8154 43.8352 8.15422 36.7873 8.15422C29.8572 8.13093 24.1999 13.5824 23.9878 20.3852Z"
                                            fill="" />
                                        <path
                                            d="M20.4161 44.108V28.6534H21.4062V44.108H20.4161ZM23.2716 33.5977C23.2152 33.0704 22.9778 32.6599 22.5592 32.3661C22.1447 32.0723 21.6054 31.9254 20.9413 31.9254C20.4745 31.9254 20.074 31.9959 19.74 32.1367C19.4059 32.2776 19.1504 32.4687 18.9733 32.7102C18.7962 32.9517 18.7056 33.2274 18.7016 33.5373C18.7016 33.7949 18.76 34.0182 18.8767 34.2074C18.9974 34.3965 19.1604 34.5575 19.3657 34.6903C19.5709 34.8191 19.7983 34.9278 20.0479 35.0163C20.2974 35.1049 20.5489 35.1793 20.8025 35.2397L21.9616 35.5295C22.4284 35.6381 22.8772 35.785 23.3078 35.9702C23.7425 36.1553 24.1308 36.3887 24.4729 36.6705C24.819 36.9522 25.0927 37.2923 25.2939 37.6907C25.4952 38.0891 25.5958 38.556 25.5958 39.0913C25.5958 39.8157 25.4107 40.4536 25.0404 41.005C24.6701 41.5523 24.1349 41.9809 23.4346 42.2908C22.7383 42.5967 21.8952 42.7496 20.9051 42.7496C19.9432 42.7496 19.1081 42.6007 18.3998 42.3029C17.6955 42.0051 17.1441 41.5704 16.7456 40.9989C16.3512 40.4274 16.1379 39.7312 16.1057 38.9102H18.3092C18.3414 39.3408 18.4742 39.699 18.7077 39.9847C18.9411 40.2705 19.2449 40.4838 19.6192 40.6246C19.9975 40.7655 20.4201 40.8359 20.887 40.8359C21.374 40.8359 21.8006 40.7635 22.1668 40.6186C22.5371 40.4697 22.8269 40.2644 23.0361 40.0028C23.2454 39.7372 23.3521 39.4273 23.3561 39.0732C23.3521 38.7512 23.2575 38.4856 23.0724 38.2763C22.8872 38.063 22.6276 37.8859 22.2936 37.745C21.9636 37.6001 21.5772 37.4714 21.1345 37.3587L19.7279 36.9964C18.7097 36.7348 17.9047 36.3384 17.3131 35.8072C16.7255 35.2719 16.4317 34.5616 16.4317 33.6761C16.4317 32.9477 16.6289 32.3098 17.0233 31.7624C17.4218 31.2151 17.9631 30.7905 18.6473 30.4886C19.3315 30.1828 20.1062 30.0298 20.9715 30.0298C21.8489 30.0298 22.6176 30.1828 23.2776 30.4886C23.9417 30.7905 24.4629 31.2111 24.8412 31.7504C25.2195 32.2856 25.4147 32.9014 25.4268 33.5977H23.2716Z"
                                            fill="" />
                                        <path
                                            d="M40.6168 17.4911L40.0312 18.777H32.0202L32.4971 17.4911H40.6168ZM39.5 19.9844L38.8782 21.2884H32.0202L32.4971 19.9844H39.5ZM42.1381 14.201L41.2929 16C41.0997 15.8471 40.8804 15.6982 40.6349 15.5533C40.3894 15.4084 40.1177 15.2876 39.8199 15.1911C39.5221 15.0945 39.1961 15.0462 38.8419 15.0462C38.2423 15.0462 37.713 15.2051 37.2542 15.5231C36.7954 15.837 36.4352 16.3159 36.1736 16.9599C35.916 17.5998 35.7872 18.4107 35.7872 19.3928C35.7872 20.3748 35.916 21.1857 36.1736 21.8256C36.4352 22.4656 36.7954 22.9405 37.2542 23.2504C37.713 23.5603 38.2423 23.7152 38.8419 23.7152C39.1961 23.7152 39.5221 23.6689 39.8199 23.5763C40.1177 23.4838 40.3854 23.3671 40.6228 23.2262C40.8643 23.0853 41.0716 22.9445 41.2446 22.8036L42.1019 24.6026C41.6712 24.9769 41.1742 25.2586 40.6108 25.4478C40.0513 25.637 39.4617 25.7315 38.8419 25.7315C37.8116 25.7315 36.898 25.48 36.1012 24.9769C35.3083 24.4698 34.6865 23.7434 34.2358 22.7976C33.785 21.8478 33.5596 20.7128 33.5596 19.3928C33.5596 18.0687 33.785 16.9317 34.2358 15.9819C34.6865 15.0321 35.3083 14.3036 36.1012 13.7965C36.898 13.2854 37.8116 13.0298 38.8419 13.0298C39.4859 13.0298 40.0835 13.1325 40.6349 13.3377C41.1903 13.5389 41.6914 13.8267 42.1381 14.201Z"
                                            fill="" />
                                    </svg>
                                    <span>Swap</span>
                                </div>
                            </a>
                            <a href="<?= base_url() ?>receive"
                                class="d-flex flex-column justify-content-center align-items-center py-2 my-3 menus-blue">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill=""
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M37.2868 3.84376C35.7428 3.84745 34.4893 5.05525 34.4893 6.52125V19.7813H40.3855C41.7755 19.7813 42.7491 19.3648 43.3715 18.7659C43.994 18.1669 44.4268 17.23 44.4268 15.8925V10.75C44.4268 8.85804 43.6246 7.13007 42.3242 5.85937C41.0388 4.62451 39.2487 3.86312 37.2868 3.84376ZM31.1768 6.52125C31.1768 3.272 33.9386 0.65625 37.2939 0.65625H37.3091L37.3091 0.656317C40.1562 0.681451 42.7778 1.78811 44.6704 3.6093L44.6785 3.61707L44.6785 3.6171C46.5557 5.44852 47.7393 7.96892 47.7393 10.75V15.8925C47.7393 17.9125 47.0678 19.7169 45.7138 21.0198C44.3598 22.3227 42.4846 22.9688 40.3855 22.9688H32.833C31.9183 22.9688 31.1768 22.2552 31.1768 21.375V6.52125Z"
                                        fill="" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.59526 3.69725C4.37249 1.71688 7.09827 0.65625 10.7498 0.65625H37.2498C38.1646 0.65625 38.9061 1.3698 38.9061 2.25C38.9061 3.1302 38.1646 3.84375 37.2498 3.84375C35.7354 3.84375 34.4894 5.0427 34.4894 6.5V42.625C34.4894 45.6887 30.8534 47.4198 28.3126 45.6046L28.3074 45.6009L24.5137 42.8684C24.3233 42.7274 24.0189 42.7356 23.8239 42.9232L20.114 46.4932C18.6059 47.9444 16.1438 47.9444 14.6357 46.4932L14.6322 46.4898L10.97 42.9445C10.9696 42.9441 10.9703 42.9448 10.97 42.9445C10.7508 42.7345 10.4355 42.7243 10.2198 42.88L6.44992 45.5954C6.44844 45.5964 6.44696 45.5975 6.44548 45.5986C3.88781 47.458 0.260254 45.6923 0.260254 42.625V10.75C0.260254 8.19391 0.857238 5.63393 2.59526 3.69725ZM31.8432 3.84375H10.7498C7.7764 3.84375 6.08552 4.685 5.10233 5.78056C4.07994 6.91982 3.57275 8.60984 3.57275 10.75V42.625C3.57275 43.0835 4.09255 43.3149 4.44964 43.0546L4.45728 43.0491L8.23233 40.33C9.78295 39.2109 11.9414 39.3715 13.3122 40.6905L13.3158 40.6939L16.978 44.2393C16.9783 44.2396 16.9777 44.239 16.978 44.2393C17.1926 44.4447 17.5575 44.4453 17.7717 44.2393L21.4816 40.6693C22.8296 39.3722 24.992 39.2084 26.5235 40.3344L30.2872 43.0454C30.2878 43.0458 30.2884 43.0462 30.289 43.0467C30.6631 43.3118 31.1769 43.0456 31.1769 42.625V6.5C31.1769 5.54468 31.4175 4.64152 31.8432 3.84375Z"
                                        fill="" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.09375 17.125C9.09375 16.2448 9.83528 15.5312 10.75 15.5312H24C24.9147 15.5312 25.6562 16.2448 25.6562 17.125C25.6562 18.0052 24.9147 18.7188 24 18.7188H10.75C9.83528 18.7188 9.09375 18.0052 9.09375 17.125Z"
                                        fill="" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.75 25.625C10.75 24.7448 11.4915 24.0312 12.4062 24.0312H22.3438C23.2585 24.0312 24 24.7448 24 25.625C24 26.5052 23.2585 27.2188 22.3438 27.2188H12.4062C11.4915 27.2188 10.75 26.5052 10.75 25.625Z"
                                        fill="" />
                                </svg>
                                <span>Deposit/receive funds</span>
                            </a>
                            <a href="<?= base_url() ?>wallet"
                                class="d-flex flex-column justify-content-center align-items-center py-2 my-3 menus-blue special"><svg
                                    width="64" height="63" viewBox="0 0 64 63" fill=""
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.37502 17.0625V16.5C8.37502 13.6716 8.37502 12.2574 9.2537 11.3787C10.1324 10.5 11.5466 10.5 14.375 10.5L52 10.5C52.4714 10.5 52.7071 10.5 52.8536 10.6464C53 10.7929 53 11.0286 53 11.5V17.625C53 20.4534 53 21.8676 52.1213 22.7463C51.2426 23.625 49.8284 23.625 47 23.625L39.875 23.625M8.37502 17.0625V17.625C8.37502 20.4534 8.37502 21.8676 9.2537 22.7463C10.1324 23.625 11.5466 23.625 14.375 23.625L53.625 23.625C54.5678 23.625 55.0392 23.625 55.3321 23.9179C55.625 24.2108 55.625 24.6822 55.625 25.625L55.625 34.125M8.37502 17.0625L8.37502 51.125C8.37502 53.0106 8.37502 53.9534 8.96081 54.5392C9.54659 55.125 10.4894 55.125 12.375 55.125L53.625 55.125C54.5678 55.125 55.0392 55.125 55.3321 54.8321C55.625 54.5392 55.625 54.0678 55.625 53.125L55.625 44.625M55.625 44.625H41.875C40.9322 44.625 40.4608 44.625 40.1679 44.3321C39.875 44.0392 39.875 43.5678 39.875 42.625V36.125C39.875 35.1822 39.875 34.7108 40.1679 34.4179C40.4608 34.125 40.9322 34.125 41.875 34.125H55.625M55.625 44.625L55.625 34.125"
                                        stroke="" stroke-width="3" />
                                </svg>
                                <span>Wallet to Wallet</span>
                            </a>
                            <a href="<?= base_url() ?>bank"
                                class="d-flex flex-column justify-content-center align-items-center py-2 my-3 menus-blue special">
                                <svg width="39" height="36" viewBox="0 0 39 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.875 31.5H34.125M9.75 27V15M16.25 27V15M22.75 27V15M29.25 27V15M32.5 10.5L20.189 3.39749C19.939 3.25329 19.8141 3.18119 19.68 3.15307C19.5615 3.12822 19.4385 3.12822 19.32 3.15307C19.1859 3.18119 19.061 3.25329 18.811 3.39749L6.5 10.5H32.5Z"
                                        stroke="" stroke-width="2.7" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span>Wallet to Bank</span>
                            </a>
                            <a href="<?= base_url() ?>search"
                                class="d-flex flex-column justify-content-center align-items-center py-2 my-3 menus-blue">
                                <svg width="28" height="29" viewBox="0 0 28 29" fill=""
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.625 14.5C2.625 12.7334 4.06675 11.2917 5.83333 11.2917C7.59992 11.2917 9.04167 12.7334 9.04167 14.5C9.04167 16.2666 7.59991 17.7083 5.83333 17.7083C4.06675 17.7083 2.625 16.2666 2.625 14.5ZM5.83333 13.0417C5.03325 13.0417 4.375 13.6999 4.375 14.5C4.375 15.3001 5.03325 15.9583 5.83333 15.9583C6.63342 15.9583 7.29167 15.3001 7.29167 14.5C7.29167 13.6999 6.63342 13.0417 5.83333 13.0417Z"
                                        fill="" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.9585 14.5C18.9585 12.7334 20.4002 11.2917 22.1668 11.2917C23.9334 11.2917 25.3752 12.7334 25.3752 14.5C25.3752 16.2666 23.9334 17.7083 22.1668 17.7083C20.4002 17.7083 18.9585 16.2666 18.9585 14.5ZM22.1668 13.0417C21.3667 13.0417 20.7085 13.6999 20.7085 14.5C20.7085 15.3001 21.3667 15.9583 22.1668 15.9583C22.9669 15.9583 23.6252 15.3001 23.6252 14.5C23.6252 13.6999 22.9669 13.0417 22.1668 13.0417Z"
                                        fill="" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.7915 14.5C10.7915 12.7334 12.2333 11.2917 13.9998 11.2917C15.7664 11.2917 17.2082 12.7334 17.2082 14.5C17.2082 16.2666 15.7664 17.7083 13.9998 17.7083C12.2333 17.7083 10.7915 16.2666 10.7915 14.5ZM13.9998 13.0417C13.1998 13.0417 12.5415 13.6999 12.5415 14.5C12.5415 15.3001 13.1998 15.9583 13.9998 15.9583C14.7999 15.9583 15.4582 15.3001 15.4582 14.5C15.4582 13.6999 14.7999 13.0417 13.9998 13.0417Z"
                                        fill="" />
                                </svg>
                                <span>History</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>