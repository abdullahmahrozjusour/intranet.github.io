<style type="text/tailwindcss">
    .fc-header-toolbar {

        padding-top: 1em;
        padding-left: 1em;
        padding-right: 1em;
    }

    .container-in {
        @apply mx-auto max-w-[1200px] px-4;
    }

    .nav {
        @apply flex flex-col items-center gap-4
    }

    .menu {
        @apply m-0 p-0 lg:flex hidden gap-4 items-center;
        justify-content: center;

        li {
            a {
                @apply text-white font-medium;
            }

            &.active,
            &:hover {
                a {
                    @apply text-secondary;
                }
            }
        }
    }

    .btn-blue {
        @apply bg-secondary md:h-10 h-8 flex gap-2 text-white items-center lg:px-4 px-2 text-sm md:text-base rounded-lg border-2 border-white font-semibold;
    }

    .btn-white {
        @apply bg-white md:h-10 h-8 flex gap-2 text-secondary items-center lg:px-4 px-2 text-sm md:text-base rounded-lg border-2 border-secondary font-semibold;
    }

    .news-wrapper {
        background: url(assets/imgs/u.png) no-repeat right #fff;
    }

    body {
        @apply bg-primary;
    }

    .content-modal {
        h3 {
            @apply text-xl font-semibold text-black/75 mb-4;
        }

        strong {
            @apply text-lg font-medium text-black/75;
        }

        p {
            @apply text-black/75 mb-4 mt-0 text-sm;
        }

        ul {
            padding-left: 1.5rem;
            list-style: disc;
            margin-bottom: 1rem;

            li {
                font-size: 14px;

                strong {
                    @apply text-sm;
                }
            }

            &>ul {
                padding-left: 1rem;
                list-style: lower-alpha;
            }
        }
    }

    /* Calendar */
    .fc {
        .fc-toolbar.fc-header-toolbar {
            @apply bg-secondary text-white px-3 py-2;

            .fc-toolbar-title {
                @apply font-bold text-2xl;
            }
        }

        .fc-button-primary {
            --fc-button-bg-color: transparent;
            --fc-button-border-color: #fff;
            --fc-button-text-color: #fff;
            border-radius: 50%;
            border-width: 2px;
            padding: 3px;
        }
    }

    .form-group {
        @apply flex flex-col;
    }

    .in-input {
        @apply border border-gray-400 rounded-md px-3 py-1 h-[35px];

        &:focus,
        &:focus-visible {
            @apply border-primary outline-primary;
        }

    }

    textarea.in-input {
        @apply h-[80px]
    }

    select.in-input {
        background-repeat: no-repeat;
        background-position: 98% 9px;
        background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIGZpbGw9IiMwMDAwMDAiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTUuMjkzIDguMjkzYTEgMSAwIDAgMCAwIDEuNDE0bDYgNmExIDEgMCAwIDAgMS40MTQgMGw2LTZhMSAxIDAgMCAwLTEuNDE0LTEuNDE0TDEyIDEzLjU4NiA2LjcwNyA4LjI5M2ExIDEgMCAwIDAtMS40MTQgMHoiIGNsaXAtcnVsZT0iZXZlbm9kZCIgb3BhY2l0eT0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjwvZz48L3N2Zz4=");
        appearance: none;
        background-size: 20px;
    }

    .in-checkbox input {
        opacity: 0;
        /* display: none; */
        height: 0;
        width: 0;
        visibility: hidden;
    }

    .in-checkbox {
        position: relative;

        &.ch-ar {
            direction: rtl;
            display: flex;

            label {
                font-size: 11px;
                line-height: 11px;
                min-height: 19px;
                align-items: center;

                &::before {
                    right: 0;
                    left: inherit;
                    top: 0;
                    bottom: 0;
                    margin: auto;
                }
            }

            input:checked+label:after {
                left: inherit;
                right: 0;
                top: 0;
                bottom: 0;
                margin: auto;
            }
        }


    }

    .in-checkbox label {
        padding-inline-start: 20px;
        @apply text-sm;
        line-height: 1rem;

        &:before {
            content: '';
            position: absolute;
            left: 0;
            height: 17px;
            width: 17px;
            border: 2px solid #333;
            border-radius: 3px;
            top: 2px;
        }

    }


    .in-checkbox input:checked+label:after {
        /* @apply bg-primary; */

        content: '';
        position: absolute;
        left: 0;
        height: 17px;
        width: 17px;
        top: 2px;
        background: no-repeat center url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIGQ9Ik0xOC43IDcuMmMtLjQtLjQtMS0uNC0xLjQgMGwtNy41IDcuNS0zLjEtMy4xYy0uNC0uNC0xLS40LTEuNCAwcy0uNCAxIDAgMS40bDMuOCAzLjhjLjIuMi40LjMuNy4zcy41LS4xLjctLjNsOC4yLTguMmMuNC0uNC40LTEgMC0xLjR6IiBmaWxsPSIjMDAwMDAwIiBvcGFjaXR5PSIxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PC9nPjwvc3ZnPg==");
        background-size: 18px;
    }

    .radioButton{
        input{
            opacity: 0;
            height: 0px;
            width: 0px;
            display: none;
            &:checked{
                /* opacity: 1; */
                &+label{
                    @apply bg-secondary text-white;
                }
            }
        }
        label{
            @apply px-4 py-2 rounded-md bg-slate-200 text-secondary cursor-pointer  w-full;   
        }
    }

    /* .in-checkbox input::checked + label:after {
       
    } */
</style>
