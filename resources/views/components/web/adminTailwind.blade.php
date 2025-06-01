<style type="text/tailwindcss">

    .form-group {
        @apply flex flex-col;
    }

    .in-input {
        @apply border border-gray-400 rounded-md px-3 py-1 h-[38px];

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
            label::before {
                right: 0;
                left: inherit;
            }

            input:checked+label:after {
                left: inherit;
                right: 0
            }
        }


    }

    .in-checkbox label {
        padding-inline-start: 20px;
        @apply text-sm;

        &:before {
            content: '';
            position: absolute;
            left: 0;
            height: 17px;
            width: 17px;
            border: 2px solid #333;
            border-radius: 3px;
            top:2px;
        }

    }


    .in-checkbox input:checked+label:after {
        content: '';
        position: absolute;
        left: 0;
        height: 17px;
        width: 17px;
        top:2px;
        background: no-repeat center url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIGQ9Ik0xOC43IDcuMmMtLjQtLjQtMS0uNC0xLjQgMGwtNy41IDcuNS0zLjEtMy4xYy0uNC0uNC0xLS40LTEuNCAwcy0uNCAxIDAgMS40bDMuOCAzLjhjLjIuMi40LjMuNy4zcy41LS4xLjctLjNsOC4yLTguMmMuNC0uNC40LTEgMC0xLjR6IiBmaWxsPSIjMDAwMDAwIiBvcGFjaXR5PSIxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PC9nPjwvc3ZnPg==");
        background-size: 18px;
    }
</style>
