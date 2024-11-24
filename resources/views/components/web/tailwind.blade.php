
<style type="text/tailwindcss">

    .fc-header-toolbar {

        padding-top: 1em;
        padding-left: 1em;
        padding-right: 1em;
    }

    .container-in {@apply mx-auto max-w-[1200px] px-4;}
    .nav{@apply flex flex-col items-center gap-4}
    .menu{@apply m-0 p-0 lg:flex hidden gap-4 items-center; justify-content: center;
        li{
            a{
                @apply text-white font-medium;
            }
            &.active,
            &:hover{
                a{
                    @apply text-secondary;
                }
            }
        }
    }
    .btn-blue{
        @apply bg-secondary md:h-10 h-8 flex gap-2 text-white items-center lg:px-4 px-2 text-sm md:text-base rounded-lg border-2 border-white font-semibold;
    }
    .btn-white{
        @apply bg-white md:h-10 h-8 flex gap-2 text-secondary items-center lg:px-4 px-2 text-sm md:text-base rounded-lg border-2 border-secondary font-semibold;
    }
    .news-wrapper{
        background: url(assets/imgs/u.png) no-repeat right #fff;
    }
    body{
        @apply bg-primary;
    }
    .content-modal{
        h3{@apply text-xl font-semibold text-black/75 mb-4; }
        strong{
            @apply text-lg font-medium text-black/75;
        }
        p{
            @apply text-black/75 mb-4 mt-0 text-sm;
        }
        ul{
            padding-left: 1.5rem;
            list-style: disc;
            margin-bottom: 1rem;
            li{font-size: 14px;
                strong{
                    @apply text-sm;
                }
            }
            &>ul{
                padding-left: 1rem;
                list-style: lower-alpha;
            }
        }
    }

    /* Calendar */
    .fc {
        .fc-toolbar.fc-header-toolbar{
        @apply bg-secondary text-white px-3 py-2;
            .fc-toolbar-title{
                @apply font-bold text-2xl;
            }
        }
        .fc-button-primary{
            --fc-button-bg-color: transparent;
            --fc-button-border-color: #fff;
            --fc-button-text-color: #fff;
            border-radius: 50%;
            border-width: 2px;
            padding: 3px;
        }
    }
  </style>
