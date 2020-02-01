<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modern-business/package-lock.json */
class __TwigTemplate_6921c1c38e485d26c2d9a67382bc04fa2920b5448ae8ad910804de44e7e08876 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/package-lock.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modern-business/package-lock.json"));

        // line 1
        echo "{
    \"name\": \"startbootstrap-modern-business\",
    \"version\": \"4.2.1\",
    \"lockfileVersion\": 1,
    \"requires\": true,
    \"dependencies\": {
        \"@types/events\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/@types/events/-/events-3.0.0.tgz\",
            \"integrity\": \"sha512-EaObqwIvayI5a8dCzhFrjKzVwKLxjoG9T6Ppd5CEo07LRKfQ8Yokw54r5+Wq7FaBQ+yXRvQAYPrHwya1/UFt9g==\",
            \"dev\": true
        },
        \"@types/glob\": {
            \"version\": \"7.1.1\",
            \"resolved\": \"https://registry.npmjs.org/@types/glob/-/glob-7.1.1.tgz\",
            \"integrity\": \"sha512-1Bh06cbWJUHMC97acuD6UMG29nMt0Aqz1vF3guLfG+kHHJhy3AyohZFFxYk2f7Q1SQIrNwvncxAE0N/9s70F2w==\",
            \"dev\": true,
            \"requires\": {
                \"@types/events\": \"*\",
                \"@types/minimatch\": \"*\",
                \"@types/node\": \"*\"
            }
        },
        \"@types/minimatch\": {
            \"version\": \"3.0.3\",
            \"resolved\": \"https://registry.npmjs.org/@types/minimatch/-/minimatch-3.0.3.tgz\",
            \"integrity\": \"sha512-tHq6qdbT9U1IRSGf14CL0pUlULksvY9OZ+5eEgl1N7t+OA3tGvNpxJCzuKQlsNgCVwbAs670L1vcVQi8j9HjnA==\",
            \"dev\": true
        },
        \"@types/node\": {
            \"version\": \"12.0.0\",
            \"resolved\": \"https://registry.npmjs.org/@types/node/-/node-12.0.0.tgz\",
            \"integrity\": \"sha512-Jrb/x3HT4PTJp6a4avhmJCDEVrPdqLfl3e8GGMbpkGGdwAV5UGlIs4vVEfsHHfylZVOKZWpOqmqFH8CbfOZ6kg==\",
            \"dev\": true
        },
        \"accepts\": {
            \"version\": \"1.3.7\",
            \"resolved\": \"https://registry.npmjs.org/accepts/-/accepts-1.3.7.tgz\",
            \"integrity\": \"sha512-Il80Qs2WjYlJIBNzNkK6KYqlVMTbZLXgHx2oT0pU/fjRHyEp+PEfEPY0R3WCwAGVOtauxh1hOxNgIf5bv7dQpA==\",
            \"dev\": true,
            \"requires\": {
                \"mime-types\": \"~2.1.24\",
                \"negotiator\": \"0.6.2\"
            }
        },
        \"after\": {
            \"version\": \"0.8.2\",
            \"resolved\": \"https://registry.npmjs.org/after/-/after-0.8.2.tgz\",
            \"integrity\": \"sha1-/ts5T58OAqqXaOcCvaI7UF+ufh8=\",
            \"dev\": true
        },
        \"ansi-colors\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/ansi-colors/-/ansi-colors-1.1.0.tgz\",
            \"integrity\": \"sha512-SFKX67auSNoVR38N3L+nvsPjOE0bybKTYbkf5tRvushrAPQ9V75huw0ZxBkKVeRU9kqH3d6HA4xTckbwZ4ixmA==\",
            \"dev\": true,
            \"requires\": {
                \"ansi-wrap\": \"^0.1.0\"
            }
        },
        \"ansi-gray\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-gray/-/ansi-gray-0.1.1.tgz\",
            \"integrity\": \"sha1-KWLPVOyXksSFEKPetSRDaGHvclE=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-wrap\": \"0.1.0\"
            }
        },
        \"ansi-regex\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-2.1.1.tgz\",
            \"integrity\": \"sha1-w7M6te42DYbg5ijwRorn7yfWVN8=\",
            \"dev\": true
        },
        \"ansi-styles\": {
            \"version\": \"2.2.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-2.2.1.tgz\",
            \"integrity\": \"sha1-tDLdM1i2NM914eRmQ2gkBTPB3b4=\",
            \"dev\": true
        },
        \"ansi-wrap\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/ansi-wrap/-/ansi-wrap-0.1.0.tgz\",
            \"integrity\": \"sha1-qCJQ3bABXponyoLoLqYDu/pF768=\",
            \"dev\": true
        },
        \"anymatch\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/anymatch/-/anymatch-2.0.0.tgz\",
            \"integrity\": \"sha512-5teOsQWABXHHBFP9y3skS5P3d/WfWXpv3FUpy+LorMrNYaT9pI4oLMQX7jzQ2KklNpGpWHzdCXTDT2Y3XGlZBw==\",
            \"dev\": true,
            \"requires\": {
                \"micromatch\": \"^3.1.4\",
                \"normalize-path\": \"^2.1.1\"
            },
            \"dependencies\": {
                \"normalize-path\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-2.1.1.tgz\",
                    \"integrity\": \"sha1-GrKLVW4Zg2Oowab35vogE3/mrtk=\",
                    \"dev\": true,
                    \"requires\": {
                        \"remove-trailing-separator\": \"^1.0.1\"
                    }
                }
            }
        },
        \"append-buffer\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/append-buffer/-/append-buffer-1.0.2.tgz\",
            \"integrity\": \"sha1-2CIM9GYIFSXv6lBhTz3mUU36WPE=\",
            \"dev\": true,
            \"requires\": {
                \"buffer-equal\": \"^1.0.0\"
            }
        },
        \"archy\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/archy/-/archy-1.0.0.tgz\",
            \"integrity\": \"sha1-+cjBN1fMHde8N5rHeyxipcKGjEA=\",
            \"dev\": true
        },
        \"arr-diff\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/arr-diff/-/arr-diff-4.0.0.tgz\",
            \"integrity\": \"sha1-1kYQdP6/7HHn4VI1dhoyml3HxSA=\",
            \"dev\": true
        },
        \"arr-filter\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/arr-filter/-/arr-filter-1.1.2.tgz\",
            \"integrity\": \"sha1-Q/3d0JHo7xGqTEXZzcGOLf8XEe4=\",
            \"dev\": true,
            \"requires\": {
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"arr-flatten\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/arr-flatten/-/arr-flatten-1.1.0.tgz\",
            \"integrity\": \"sha512-L3hKV5R/p5o81R7O02IGnwpDmkp6E982XhtbuwSe3O4qOtMMMtodicASA1Cny2U+aCXcNpml+m4dPsvsJ3jatg==\",
            \"dev\": true
        },
        \"arr-map\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/arr-map/-/arr-map-2.0.2.tgz\",
            \"integrity\": \"sha1-Onc0X/wc814qkYJWAfnljy4kysQ=\",
            \"dev\": true,
            \"requires\": {
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"arr-union\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/arr-union/-/arr-union-3.1.0.tgz\",
            \"integrity\": \"sha1-45sJrqne+Gao8gbiiK9jkZuuOcQ=\",
            \"dev\": true
        },
        \"array-each\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/array-each/-/array-each-1.0.1.tgz\",
            \"integrity\": \"sha1-p5SvDAWrF1KEbudTofIRoFugxE8=\",
            \"dev\": true
        },
        \"array-initial\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/array-initial/-/array-initial-1.1.0.tgz\",
            \"integrity\": \"sha1-L6dLJnOTccOUe9enrcc74zSz15U=\",
            \"dev\": true,
            \"requires\": {
                \"array-slice\": \"^1.0.0\",
                \"is-number\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"is-number\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-4.0.0.tgz\",
                    \"integrity\": \"sha512-rSklcAIlf1OmFdyAqbnWTLVelsQ58uvZ66S/ZyawjWqIviTWCjg2PzVGw8WUA+nNuPTqb4wgA+NszrJ+08LlgQ==\",
                    \"dev\": true
                }
            }
        },
        \"array-last\": {
            \"version\": \"1.3.0\",
            \"resolved\": \"https://registry.npmjs.org/array-last/-/array-last-1.3.0.tgz\",
            \"integrity\": \"sha512-eOCut5rXlI6aCOS7Z7kCplKRKyiFQ6dHFBem4PwlwKeNFk2/XxTrhRh5T9PyaEWGy/NHTZWbY+nsZlNFJu9rYg==\",
            \"dev\": true,
            \"requires\": {
                \"is-number\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"is-number\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-4.0.0.tgz\",
                    \"integrity\": \"sha512-rSklcAIlf1OmFdyAqbnWTLVelsQ58uvZ66S/ZyawjWqIviTWCjg2PzVGw8WUA+nNuPTqb4wgA+NszrJ+08LlgQ==\",
                    \"dev\": true
                }
            }
        },
        \"array-slice\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/array-slice/-/array-slice-1.1.0.tgz\",
            \"integrity\": \"sha512-B1qMD3RBP7O8o0H2KbrXDyB0IccejMF15+87Lvlor12ONPRHP6gTjXMNkt/d3ZuOGbAe66hFmaCfECI24Ufp6w==\",
            \"dev\": true
        },
        \"array-sort\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/array-sort/-/array-sort-1.0.0.tgz\",
            \"integrity\": \"sha512-ihLeJkonmdiAsD7vpgN3CRcx2J2S0TiYW+IS/5zHBI7mKUq3ySvBdzzBfD236ubDBQFiiyG3SWCPc+msQ9KoYg==\",
            \"dev\": true,
            \"requires\": {
                \"default-compare\": \"^1.0.0\",
                \"get-value\": \"^2.0.6\",
                \"kind-of\": \"^5.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
                    \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
                    \"dev\": true
                }
            }
        },
        \"array-union\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/array-union/-/array-union-1.0.2.tgz\",
            \"integrity\": \"sha1-mjRBDk9OPaI96jdb5b5w8kd47Dk=\",
            \"dev\": true,
            \"requires\": {
                \"array-uniq\": \"^1.0.1\"
            }
        },
        \"array-uniq\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/array-uniq/-/array-uniq-1.0.3.tgz\",
            \"integrity\": \"sha1-r2rId6Jcx/dOBYiUdThY39sk/bY=\",
            \"dev\": true
        },
        \"array-unique\": {
            \"version\": \"0.3.2\",
            \"resolved\": \"https://registry.npmjs.org/array-unique/-/array-unique-0.3.2.tgz\",
            \"integrity\": \"sha1-qJS3XUvE9s1nnvMkSp/Y9Gri1Cg=\",
            \"dev\": true
        },
        \"arraybuffer.slice\": {
            \"version\": \"0.0.7\",
            \"resolved\": \"https://registry.npmjs.org/arraybuffer.slice/-/arraybuffer.slice-0.0.7.tgz\",
            \"integrity\": \"sha512-wGUIVQXuehL5TCqQun8OW81jGzAWycqzFF8lFp+GOM5BXLYj3bKNsYC4daB7n6XjCqxQA/qgTJ+8ANR3acjrog==\",
            \"dev\": true
        },
        \"assign-symbols\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/assign-symbols/-/assign-symbols-1.0.0.tgz\",
            \"integrity\": \"sha1-WWZ/QfrdTyDMvCu5a41Pf3jsA2c=\",
            \"dev\": true
        },
        \"async\": {
            \"version\": \"1.5.2\",
            \"resolved\": \"https://registry.npmjs.org/async/-/async-1.5.2.tgz\",
            \"integrity\": \"sha1-7GphrlZIDAw8skHJVhjiCJL5Zyo=\",
            \"dev\": true
        },
        \"async-done\": {
            \"version\": \"1.3.1\",
            \"resolved\": \"https://registry.npmjs.org/async-done/-/async-done-1.3.1.tgz\",
            \"integrity\": \"sha512-R1BaUeJ4PMoLNJuk+0tLJgjmEqVsdN118+Z8O+alhnQDQgy0kmD5Mqi0DNEmMx2LM0Ed5yekKu+ZXYvIHceicg==\",
            \"dev\": true,
            \"requires\": {
                \"end-of-stream\": \"^1.1.0\",
                \"once\": \"^1.3.2\",
                \"process-nextick-args\": \"^1.0.7\",
                \"stream-exhaust\": \"^1.0.1\"
            },
            \"dependencies\": {
                \"process-nextick-args\": {
                    \"version\": \"1.0.7\",
                    \"resolved\": \"https://registry.npmjs.org/process-nextick-args/-/process-nextick-args-1.0.7.tgz\",
                    \"integrity\": \"sha1-FQ4gt1ZZCtP5EJPyWk8q2L/zC6M=\",
                    \"dev\": true
                }
            }
        },
        \"async-each\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/async-each/-/async-each-1.0.3.tgz\",
            \"integrity\": \"sha512-z/WhQ5FPySLdvREByI2vZiTWwCnF0moMJ1hK9YQwDTHKh6I7/uSckMetoRGb5UBZPC1z0jlw+n/XCgjeH7y1AQ==\",
            \"dev\": true
        },
        \"async-each-series\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/async-each-series/-/async-each-series-0.1.1.tgz\",
            \"integrity\": \"sha1-dhfBkXQB/Yykooqtzj266Yr+tDI=\",
            \"dev\": true
        },
        \"async-limiter\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/async-limiter/-/async-limiter-1.0.0.tgz\",
            \"integrity\": \"sha512-jp/uFnooOiO+L211eZOoSyzpOITMXx1rBITauYykG3BRYPu8h0UcxsPNB04RR5vo4Tyz3+ay17tR6JVf9qzYWg==\",
            \"dev\": true
        },
        \"async-settle\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/async-settle/-/async-settle-1.0.0.tgz\",
            \"integrity\": \"sha1-HQqRS7Aldb7IqPOnTlCA9yssDGs=\",
            \"dev\": true,
            \"requires\": {
                \"async-done\": \"^1.2.2\"
            }
        },
        \"atob\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/atob/-/atob-2.1.2.tgz\",
            \"integrity\": \"sha512-Wm6ukoaOGJi/73p/cl2GvLjTI5JM1k/O14isD73YML8StrH/7/lRFgmg8nICZgD3bZZvjwCGxtMOD3wWNAu8cg==\",
            \"dev\": true
        },
        \"axios\": {
            \"version\": \"0.19.0\",
            \"resolved\": \"https://registry.npmjs.org/axios/-/axios-0.19.0.tgz\",
            \"integrity\": \"sha512-1uvKqKQta3KBxIz14F2v06AEHZ/dIoeKfbTRkK1E5oqjDnuEerLmYTgJB5AiQZHJcljpg1TuRzdjDR06qNk0DQ==\",
            \"dev\": true,
            \"requires\": {
                \"follow-redirects\": \"1.5.10\",
                \"is-buffer\": \"^2.0.2\"
            },
            \"dependencies\": {
                \"is-buffer\": {
                    \"version\": \"2.0.3\",
                    \"resolved\": \"https://registry.npmjs.org/is-buffer/-/is-buffer-2.0.3.tgz\",
                    \"integrity\": \"sha512-U15Q7MXTuZlrbymiz95PJpZxu8IlipAp4dtS3wOdgPXx3mqBnslrWU14kxfHB+Py/+2PVKSr37dMAgM2A4uArw==\",
                    \"dev\": true
                }
            }
        },
        \"bach\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/bach/-/bach-1.2.0.tgz\",
            \"integrity\": \"sha1-Szzpa/JxNPeaG0FKUcFONMO9mIA=\",
            \"dev\": true,
            \"requires\": {
                \"arr-filter\": \"^1.1.1\",
                \"arr-flatten\": \"^1.0.1\",
                \"arr-map\": \"^2.0.0\",
                \"array-each\": \"^1.0.0\",
                \"array-initial\": \"^1.0.0\",
                \"array-last\": \"^1.1.1\",
                \"async-done\": \"^1.2.2\",
                \"async-settle\": \"^1.0.0\",
                \"now-and-later\": \"^2.0.0\"
            }
        },
        \"backo2\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/backo2/-/backo2-1.0.2.tgz\",
            \"integrity\": \"sha1-MasayLEpNjRj41s+u2n038+6eUc=\",
            \"dev\": true
        },
        \"balanced-match\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/balanced-match/-/balanced-match-1.0.0.tgz\",
            \"integrity\": \"sha1-ibTRmasr7kneFk6gK4nORi1xt2c=\",
            \"dev\": true
        },
        \"base\": {
            \"version\": \"0.11.2\",
            \"resolved\": \"https://registry.npmjs.org/base/-/base-0.11.2.tgz\",
            \"integrity\": \"sha512-5T6P4xPgpp0YDFvSWwEZ4NoE3aM4QBQXDzmVbraCkFj8zHM+mba8SyqB5DbZWyR7mYHo6Y7BdQo3MoA4m0TeQg==\",
            \"dev\": true,
            \"requires\": {
                \"cache-base\": \"^1.0.1\",
                \"class-utils\": \"^0.3.5\",
                \"component-emitter\": \"^1.2.1\",
                \"define-property\": \"^1.0.0\",
                \"isobject\": \"^3.0.1\",
                \"mixin-deep\": \"^1.2.0\",
                \"pascalcase\": \"^0.1.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
                    \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^1.0.0\"
                    }
                },
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"base64-arraybuffer\": {
            \"version\": \"0.1.5\",
            \"resolved\": \"https://registry.npmjs.org/base64-arraybuffer/-/base64-arraybuffer-0.1.5.tgz\",
            \"integrity\": \"sha1-c5JncZI7Whl0etZmqlzUv5xunOg=\",
            \"dev\": true
        },
        \"base64id\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/base64id/-/base64id-1.0.0.tgz\",
            \"integrity\": \"sha1-R2iMuZu2gE8OBtPnY7HDLlfY5rY=\",
            \"dev\": true
        },
        \"batch\": {
            \"version\": \"0.6.1\",
            \"resolved\": \"https://registry.npmjs.org/batch/-/batch-0.6.1.tgz\",
            \"integrity\": \"sha1-3DQxT05nkxgJP8dgJyUl+UvyXBY=\",
            \"dev\": true
        },
        \"better-assert\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/better-assert/-/better-assert-1.0.2.tgz\",
            \"integrity\": \"sha1-QIZrnhueC1W0gYlDEeaPr/rrxSI=\",
            \"dev\": true,
            \"requires\": {
                \"callsite\": \"1.0.0\"
            }
        },
        \"binary-extensions\": {
            \"version\": \"1.13.1\",
            \"resolved\": \"https://registry.npmjs.org/binary-extensions/-/binary-extensions-1.13.1.tgz\",
            \"integrity\": \"sha512-Un7MIEDdUC5gNpcGDV97op1Ywk748MpHcFTHoYs6qnj1Z3j7I53VG3nwZhKzoBZmbdRNnb6WRdFlwl7tSDuZGw==\",
            \"dev\": true
        },
        \"blob\": {
            \"version\": \"0.0.5\",
            \"resolved\": \"https://registry.npmjs.org/blob/-/blob-0.0.5.tgz\",
            \"integrity\": \"sha512-gaqbzQPqOoamawKg0LGVd7SzLgXS+JH61oWprSLH+P+abTczqJbhTR8CmJ2u9/bUYNmHTGJx/UEmn6doAvvuig==\",
            \"dev\": true
        },
        \"bootstrap\": {
            \"version\": \"4.3.1\",
            \"resolved\": \"https://registry.npmjs.org/bootstrap/-/bootstrap-4.3.1.tgz\",
            \"integrity\": \"sha512-rXqOmH1VilAt2DyPzluTi2blhk17bO7ef+zLLPlWvG494pDxcM234pJ8wTc/6R40UWizAIIMgxjvxZg5kmsbag==\"
        },
        \"brace-expansion\": {
            \"version\": \"1.1.11\",
            \"resolved\": \"https://registry.npmjs.org/brace-expansion/-/brace-expansion-1.1.11.tgz\",
            \"integrity\": \"sha512-iCuPHDFgrHX7H2vEI/5xpz07zSHB00TpugqhmYtVmMO6518mCuRMoOYFldEBl0g187ufozdaHgWKcYFb61qGiA==\",
            \"dev\": true,
            \"requires\": {
                \"balanced-match\": \"^1.0.0\",
                \"concat-map\": \"0.0.1\"
            }
        },
        \"braces\": {
            \"version\": \"2.3.2\",
            \"resolved\": \"https://registry.npmjs.org/braces/-/braces-2.3.2.tgz\",
            \"integrity\": \"sha512-aNdbnj9P8PjdXU4ybaWLK2IF3jc/EoDYbC7AazW6to3TRsfXxscC9UXOB5iDiEQrkyIbWp2SLQda4+QAa7nc3w==\",
            \"dev\": true,
            \"requires\": {
                \"arr-flatten\": \"^1.1.0\",
                \"array-unique\": \"^0.3.2\",
                \"extend-shallow\": \"^2.0.1\",
                \"fill-range\": \"^4.0.0\",
                \"isobject\": \"^3.0.1\",
                \"repeat-element\": \"^1.1.2\",
                \"snapdragon\": \"^0.8.1\",
                \"snapdragon-node\": \"^2.0.1\",
                \"split-string\": \"^3.0.2\",
                \"to-regex\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"browser-sync\": {
            \"version\": \"2.26.7\",
            \"resolved\": \"https://registry.npmjs.org/browser-sync/-/browser-sync-2.26.7.tgz\",
            \"integrity\": \"sha512-lY3emme0OyvA2ujEMpRmyRy9LY6gHLuTr2/ABxhIm3lADOiRXzP4dgekvnDrQqZ/Ec2Fz19lEjm6kglSG5766w==\",
            \"dev\": true,
            \"requires\": {
                \"browser-sync-client\": \"^2.26.6\",
                \"browser-sync-ui\": \"^2.26.4\",
                \"bs-recipes\": \"1.3.4\",
                \"bs-snippet-injector\": \"^2.0.1\",
                \"chokidar\": \"^2.0.4\",
                \"connect\": \"3.6.6\",
                \"connect-history-api-fallback\": \"^1\",
                \"dev-ip\": \"^1.0.1\",
                \"easy-extender\": \"^2.3.4\",
                \"eazy-logger\": \"^3\",
                \"etag\": \"^1.8.1\",
                \"fresh\": \"^0.5.2\",
                \"fs-extra\": \"3.0.1\",
                \"http-proxy\": \"1.15.2\",
                \"immutable\": \"^3\",
                \"localtunnel\": \"1.9.2\",
                \"micromatch\": \"^3.1.10\",
                \"opn\": \"5.3.0\",
                \"portscanner\": \"2.1.1\",
                \"qs\": \"6.2.3\",
                \"raw-body\": \"^2.3.2\",
                \"resp-modifier\": \"6.0.2\",
                \"rx\": \"4.1.0\",
                \"send\": \"0.16.2\",
                \"serve-index\": \"1.9.1\",
                \"serve-static\": \"1.13.2\",
                \"server-destroy\": \"1.0.1\",
                \"socket.io\": \"2.1.1\",
                \"ua-parser-js\": \"0.7.17\",
                \"yargs\": \"6.4.0\"
            }
        },
        \"browser-sync-client\": {
            \"version\": \"2.26.6\",
            \"resolved\": \"https://registry.npmjs.org/browser-sync-client/-/browser-sync-client-2.26.6.tgz\",
            \"integrity\": \"sha512-mGrkZdNzttKdf/16I+y+2dTQxoMCIpKbVIMJ/uP8ZpnKu9f9qa/2CYVtLtbjZG8nsM14EwiCrjuFTGBEnT3Gjw==\",
            \"dev\": true,
            \"requires\": {
                \"etag\": \"1.8.1\",
                \"fresh\": \"0.5.2\",
                \"mitt\": \"^1.1.3\",
                \"rxjs\": \"^5.5.6\"
            }
        },
        \"browser-sync-ui\": {
            \"version\": \"2.26.4\",
            \"resolved\": \"https://registry.npmjs.org/browser-sync-ui/-/browser-sync-ui-2.26.4.tgz\",
            \"integrity\": \"sha512-u20P3EsZoM8Pt+puoi3BU3KlbQAH1lAcV+/O4saF26qokrBqIDotmGonfWwoRbUmdxZkM9MBmA0K39ZTG1h4sA==\",
            \"dev\": true,
            \"requires\": {
                \"async-each-series\": \"0.1.1\",
                \"connect-history-api-fallback\": \"^1\",
                \"immutable\": \"^3\",
                \"server-destroy\": \"1.0.1\",
                \"socket.io-client\": \"^2.0.4\",
                \"stream-throttle\": \"^0.1.3\"
            }
        },
        \"bs-recipes\": {
            \"version\": \"1.3.4\",
            \"resolved\": \"https://registry.npmjs.org/bs-recipes/-/bs-recipes-1.3.4.tgz\",
            \"integrity\": \"sha1-DS1NSKcYyMBEdp/cT4lZLci2lYU=\",
            \"dev\": true
        },
        \"bs-snippet-injector\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/bs-snippet-injector/-/bs-snippet-injector-2.0.1.tgz\",
            \"integrity\": \"sha1-YbU5PxH1JVntEgaTEANDtu2wTdU=\",
            \"dev\": true
        },
        \"buffer-equal\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/buffer-equal/-/buffer-equal-1.0.0.tgz\",
            \"integrity\": \"sha1-WWFrSYME1Var1GaWayLu2j7KX74=\",
            \"dev\": true
        },
        \"buffer-from\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/buffer-from/-/buffer-from-1.1.1.tgz\",
            \"integrity\": \"sha512-MQcXEUbCKtEo7bhqEs6560Hyd4XaovZlO/k9V3hjVUF/zwW7KBVdSK4gIt/bzwS9MbR5qob+F5jusZsb0YQK2A==\",
            \"dev\": true
        },
        \"bytes\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/bytes/-/bytes-3.1.0.tgz\",
            \"integrity\": \"sha512-zauLjrfCG+xvoyaqLoV8bLVXXNGC4JqlxFCutSDWA6fJrTo2ZuvLYTqZ7aHBLZSMOopbzwv8f+wZcVzfVTI2Dg==\",
            \"dev\": true
        },
        \"cache-base\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/cache-base/-/cache-base-1.0.1.tgz\",
            \"integrity\": \"sha512-AKcdTnFSWATd5/GCPRxr2ChwIJ85CeyrEyjRHlKxQ56d4XJMGym0uAiKn0xbLOGOl3+yRpOTi484dVCEc5AUzQ==\",
            \"dev\": true,
            \"requires\": {
                \"collection-visit\": \"^1.0.0\",
                \"component-emitter\": \"^1.2.1\",
                \"get-value\": \"^2.0.6\",
                \"has-value\": \"^1.0.0\",
                \"isobject\": \"^3.0.1\",
                \"set-value\": \"^2.0.0\",
                \"to-object-path\": \"^0.3.0\",
                \"union-value\": \"^1.0.0\",
                \"unset-value\": \"^1.0.0\"
            }
        },
        \"callsite\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/callsite/-/callsite-1.0.0.tgz\",
            \"integrity\": \"sha1-KAOY5dZkvXQDi28JBRU+borxvCA=\",
            \"dev\": true
        },
        \"camelcase\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-3.0.0.tgz\",
            \"integrity\": \"sha1-MvxLn82vhF/N9+c7uXysImHwqwo=\",
            \"dev\": true
        },
        \"chalk\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-1.1.3.tgz\",
            \"integrity\": \"sha1-qBFcVeSnAv5NFQq9OHKCKn4J/Jg=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-styles\": \"^2.2.1\",
                \"escape-string-regexp\": \"^1.0.2\",
                \"has-ansi\": \"^2.0.0\",
                \"strip-ansi\": \"^3.0.0\",
                \"supports-color\": \"^2.0.0\"
            }
        },
        \"chokidar\": {
            \"version\": \"2.1.5\",
            \"resolved\": \"https://registry.npmjs.org/chokidar/-/chokidar-2.1.5.tgz\",
            \"integrity\": \"sha512-i0TprVWp+Kj4WRPtInjexJ8Q+BqTE909VpH8xVhXrJkoc5QC8VO9TryGOqTr+2hljzc1sC62t22h5tZePodM/A==\",
            \"dev\": true,
            \"requires\": {
                \"anymatch\": \"^2.0.0\",
                \"async-each\": \"^1.0.1\",
                \"braces\": \"^2.3.2\",
                \"fsevents\": \"^1.2.7\",
                \"glob-parent\": \"^3.1.0\",
                \"inherits\": \"^2.0.3\",
                \"is-binary-path\": \"^1.0.0\",
                \"is-glob\": \"^4.0.0\",
                \"normalize-path\": \"^3.0.0\",
                \"path-is-absolute\": \"^1.0.0\",
                \"readdirp\": \"^2.2.1\",
                \"upath\": \"^1.1.1\"
            }
        },
        \"class-utils\": {
            \"version\": \"0.3.6\",
            \"resolved\": \"https://registry.npmjs.org/class-utils/-/class-utils-0.3.6.tgz\",
            \"integrity\": \"sha512-qOhPa/Fj7s6TY8H8esGu5QNpMMQxz79h+urzrNYN6mn+9BnxlDGf5QZ+XeCDsxSjPqsSR56XOZOJmpeurnLMeg==\",
            \"dev\": true,
            \"requires\": {
                \"arr-union\": \"^3.1.0\",
                \"define-property\": \"^0.2.5\",
                \"isobject\": \"^3.0.0\",
                \"static-extend\": \"^0.1.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                }
            }
        },
        \"cliui\": {
            \"version\": \"3.2.0\",
            \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-3.2.0.tgz\",
            \"integrity\": \"sha1-EgYBU3qRbSmUD5NNo7SNWFo5IT0=\",
            \"dev\": true,
            \"requires\": {
                \"string-width\": \"^1.0.1\",
                \"strip-ansi\": \"^3.0.1\",
                \"wrap-ansi\": \"^2.0.0\"
            }
        },
        \"clone\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/clone/-/clone-2.1.2.tgz\",
            \"integrity\": \"sha1-G39Ln1kfHo+DZwQBYANFoCiHQ18=\",
            \"dev\": true
        },
        \"clone-buffer\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/clone-buffer/-/clone-buffer-1.0.0.tgz\",
            \"integrity\": \"sha1-4+JbIHrE5wGvch4staFnksrD3Fg=\",
            \"dev\": true
        },
        \"clone-stats\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/clone-stats/-/clone-stats-1.0.0.tgz\",
            \"integrity\": \"sha1-s3gt/4u1R04Yuba/D9/ngvh3doA=\",
            \"dev\": true
        },
        \"cloneable-readable\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/cloneable-readable/-/cloneable-readable-1.1.2.tgz\",
            \"integrity\": \"sha512-Bq6+4t+lbM8vhTs/Bef5c5AdEMtapp/iFb6+s4/Hh9MVTt8OLKH7ZOOZSCT+Ys7hsHvqv0GuMPJ1lnQJVHvxpg==\",
            \"dev\": true,
            \"requires\": {
                \"inherits\": \"^2.0.1\",
                \"process-nextick-args\": \"^2.0.0\",
                \"readable-stream\": \"^2.3.5\"
            }
        },
        \"code-point-at\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/code-point-at/-/code-point-at-1.1.0.tgz\",
            \"integrity\": \"sha1-DQcLTQQ6W+ozovGkDi7bPZpMz3c=\",
            \"dev\": true
        },
        \"collection-map\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/collection-map/-/collection-map-1.0.0.tgz\",
            \"integrity\": \"sha1-rqDwb40mx4DCt1SUOFVEsiVa8Yw=\",
            \"dev\": true,
            \"requires\": {
                \"arr-map\": \"^2.0.2\",
                \"for-own\": \"^1.0.0\",
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"collection-visit\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/collection-visit/-/collection-visit-1.0.0.tgz\",
            \"integrity\": \"sha1-S8A3PBZLwykbTTaMgpzxqApZ3KA=\",
            \"dev\": true,
            \"requires\": {
                \"map-visit\": \"^1.0.0\",
                \"object-visit\": \"^1.0.0\"
            }
        },
        \"color-support\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/color-support/-/color-support-1.1.3.tgz\",
            \"integrity\": \"sha512-qiBjkpbMLO/HL68y+lh4q0/O1MZFj2RX6X/KmMa3+gJD3z+WwI1ZzDHysvqHGS3mP6mznPckpXmw1nI9cJjyRg==\",
            \"dev\": true
        },
        \"commander\": {
            \"version\": \"2.20.0\",
            \"resolved\": \"https://registry.npmjs.org/commander/-/commander-2.20.0.tgz\",
            \"integrity\": \"sha512-7j2y+40w61zy6YC2iRNpUe/NwhNyoXrYpHMrSunaMG64nRnaf96zO/KMQR4OyN/UnE5KLyEBnKHd4aG3rskjpQ==\",
            \"dev\": true
        },
        \"component-bind\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/component-bind/-/component-bind-1.0.0.tgz\",
            \"integrity\": \"sha1-AMYIq33Nk4l8AAllGx06jh5zu9E=\",
            \"dev\": true
        },
        \"component-emitter\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/component-emitter/-/component-emitter-1.2.1.tgz\",
            \"integrity\": \"sha1-E3kY1teCg/ffemt8WmPhQOaUJeY=\",
            \"dev\": true
        },
        \"component-inherit\": {
            \"version\": \"0.0.3\",
            \"resolved\": \"https://registry.npmjs.org/component-inherit/-/component-inherit-0.0.3.tgz\",
            \"integrity\": \"sha1-ZF/ErfWLcrZJ1crmUTVhnbJv8UM=\",
            \"dev\": true
        },
        \"concat-map\": {
            \"version\": \"0.0.1\",
            \"resolved\": \"https://registry.npmjs.org/concat-map/-/concat-map-0.0.1.tgz\",
            \"integrity\": \"sha1-2Klr13/Wjfd5OnMDajug1UBdR3s=\",
            \"dev\": true
        },
        \"concat-stream\": {
            \"version\": \"1.6.2\",
            \"resolved\": \"https://registry.npmjs.org/concat-stream/-/concat-stream-1.6.2.tgz\",
            \"integrity\": \"sha512-27HBghJxjiZtIk3Ycvn/4kbJk/1uZuJFfuPEns6LaEvpvG1f0hTea8lilrouyo9mVc2GWdcEZ8OLoGmSADlrCw==\",
            \"dev\": true,
            \"requires\": {
                \"buffer-from\": \"^1.0.0\",
                \"inherits\": \"^2.0.3\",
                \"readable-stream\": \"^2.2.2\",
                \"typedarray\": \"^0.0.6\"
            }
        },
        \"connect\": {
            \"version\": \"3.6.6\",
            \"resolved\": \"https://registry.npmjs.org/connect/-/connect-3.6.6.tgz\",
            \"integrity\": \"sha1-Ce/2xVr3I24TcTWnJXSFi2eG9SQ=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"2.6.9\",
                \"finalhandler\": \"1.1.0\",
                \"parseurl\": \"~1.3.2\",
                \"utils-merge\": \"1.0.1\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                }
            }
        },
        \"connect-history-api-fallback\": {
            \"version\": \"1.6.0\",
            \"resolved\": \"https://registry.npmjs.org/connect-history-api-fallback/-/connect-history-api-fallback-1.6.0.tgz\",
            \"integrity\": \"sha512-e54B99q/OUoH64zYYRf3HBP5z24G38h5D3qXu23JGRoigpX5Ss4r9ZnDk3g0Z8uQC2x2lPaJ+UlWBc1ZWBWdLg==\",
            \"dev\": true
        },
        \"convert-source-map\": {
            \"version\": \"1.6.0\",
            \"resolved\": \"https://registry.npmjs.org/convert-source-map/-/convert-source-map-1.6.0.tgz\",
            \"integrity\": \"sha512-eFu7XigvxdZ1ETfbgPBohgyQ/Z++C0eEhTor0qRwBw9unw+L0/6V8wkSuGgzdThkiS5lSpdptOQPD8Ak40a+7A==\",
            \"dev\": true,
            \"requires\": {
                \"safe-buffer\": \"~5.1.1\"
            }
        },
        \"cookie\": {
            \"version\": \"0.3.1\",
            \"resolved\": \"https://registry.npmjs.org/cookie/-/cookie-0.3.1.tgz\",
            \"integrity\": \"sha1-5+Ch+e9DtMi6klxcWpboBtFoc7s=\",
            \"dev\": true
        },
        \"copy-descriptor\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/copy-descriptor/-/copy-descriptor-0.1.1.tgz\",
            \"integrity\": \"sha1-Z29us8OZl8LuGsOpJP1hJHSPV40=\",
            \"dev\": true
        },
        \"copy-props\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/copy-props/-/copy-props-2.0.4.tgz\",
            \"integrity\": \"sha512-7cjuUME+p+S3HZlbllgsn2CDwS+5eCCX16qBgNC4jgSTf49qR1VKy/Zhl400m0IQXl/bPGEVqncgUUMjrr4s8A==\",
            \"dev\": true,
            \"requires\": {
                \"each-props\": \"^1.3.0\",
                \"is-plain-object\": \"^2.0.1\"
            }
        },
        \"core-util-is\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/core-util-is/-/core-util-is-1.0.2.tgz\",
            \"integrity\": \"sha1-tf1UIgqivFq1eqtxQMlAdUUDwac=\",
            \"dev\": true
        },
        \"d\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/d/-/d-1.0.0.tgz\",
            \"integrity\": \"sha1-dUu1v+VUUdpppYuU1F9MWwRi1Y8=\",
            \"dev\": true,
            \"requires\": {
                \"es5-ext\": \"^0.10.9\"
            }
        },
        \"debug\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.1.0.tgz\",
            \"integrity\": \"sha512-OX8XqP7/1a9cqkxYw2yXss15f26NKWBpDXQd0/uK/KPqdQhxbPa994hnzjcE2VqQpDslf55723cKPUOGSmMY3g==\",
            \"dev\": true,
            \"requires\": {
                \"ms\": \"2.0.0\"
            }
        },
        \"decamelize\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/decamelize/-/decamelize-1.2.0.tgz\",
            \"integrity\": \"sha1-9lNNFRSCabIDUue+4m9QH5oZEpA=\",
            \"dev\": true
        },
        \"decode-uri-component\": {
            \"version\": \"0.2.0\",
            \"resolved\": \"https://registry.npmjs.org/decode-uri-component/-/decode-uri-component-0.2.0.tgz\",
            \"integrity\": \"sha1-6zkTMzRYd1y4TNGh+uBiEGu4dUU=\",
            \"dev\": true
        },
        \"default-compare\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/default-compare/-/default-compare-1.0.0.tgz\",
            \"integrity\": \"sha512-QWfXlM0EkAbqOCbD/6HjdwT19j7WCkMyiRhWilc4H9/5h/RzTF9gv5LYh1+CmDV5d1rki6KAWLtQale0xt20eQ==\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^5.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
                    \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
                    \"dev\": true
                }
            }
        },
        \"default-resolution\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/default-resolution/-/default-resolution-2.0.0.tgz\",
            \"integrity\": \"sha1-vLgrqnKtebQmp2cy8aga1t8m1oQ=\",
            \"dev\": true
        },
        \"define-properties\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/define-properties/-/define-properties-1.1.3.tgz\",
            \"integrity\": \"sha512-3MqfYKj2lLzdMSf8ZIZE/V+Zuy+BgD6f164e8K2w7dgnpKArBDerGYpM46IYYcjnkdPNMjPk9A6VFB8+3SKlXQ==\",
            \"dev\": true,
            \"requires\": {
                \"object-keys\": \"^1.0.12\"
            }
        },
        \"define-property\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-2.0.2.tgz\",
            \"integrity\": \"sha512-jwK2UV4cnPpbcG7+VRARKTZPUWowwXA8bzH5NP6ud0oeAxyYPuGZUAC7hMugpCdz4BeSZl2Dl9k66CHJ/46ZYQ==\",
            \"dev\": true,
            \"requires\": {
                \"is-descriptor\": \"^1.0.2\",
                \"isobject\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"del\": {
            \"version\": \"4.1.1\",
            \"resolved\": \"https://registry.npmjs.org/del/-/del-4.1.1.tgz\",
            \"integrity\": \"sha512-QwGuEUouP2kVwQenAsOof5Fv8K9t3D8Ca8NxcXKrIpEHjTXK5J2nXLdP+ALI1cgv8wj7KuwBhTwBkOZSJKM5XQ==\",
            \"dev\": true,
            \"requires\": {
                \"@types/glob\": \"^7.1.1\",
                \"globby\": \"^6.1.0\",
                \"is-path-cwd\": \"^2.0.0\",
                \"is-path-in-cwd\": \"^2.0.0\",
                \"p-map\": \"^2.0.0\",
                \"pify\": \"^4.0.1\",
                \"rimraf\": \"^2.6.3\"
            },
            \"dependencies\": {
                \"pify\": {
                    \"version\": \"4.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/pify/-/pify-4.0.1.tgz\",
                    \"integrity\": \"sha512-uB80kBFb/tfd68bVleG9T5GGsGPjJrLAUpR5PZIrhBnIaRTQRjqdJSsIKkOP6OAIFbj7GOrcudc5pNjZ+geV2g==\",
                    \"dev\": true
                }
            }
        },
        \"depd\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/depd/-/depd-1.1.2.tgz\",
            \"integrity\": \"sha1-m81S4UwJd2PnSbJ0xDRu0uVgtak=\",
            \"dev\": true
        },
        \"destroy\": {
            \"version\": \"1.0.4\",
            \"resolved\": \"https://registry.npmjs.org/destroy/-/destroy-1.0.4.tgz\",
            \"integrity\": \"sha1-l4hXRCxEdJ5CBmE+N5RiBYJqvYA=\",
            \"dev\": true
        },
        \"detect-file\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/detect-file/-/detect-file-1.0.0.tgz\",
            \"integrity\": \"sha1-8NZtA2cqglyxtzvbP+YjEMjlUrc=\",
            \"dev\": true
        },
        \"dev-ip\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/dev-ip/-/dev-ip-1.0.1.tgz\",
            \"integrity\": \"sha1-p2o+0YVb56ASu4rBbLgPPADcKPA=\",
            \"dev\": true
        },
        \"duplexify\": {
            \"version\": \"3.7.1\",
            \"resolved\": \"https://registry.npmjs.org/duplexify/-/duplexify-3.7.1.tgz\",
            \"integrity\": \"sha512-07z8uv2wMyS51kKhD1KsdXJg5WQ6t93RneqRxUHnskXVtlYYkLqM0gqStQZ3pj073g687jPCHrqNfCzawLYh5g==\",
            \"dev\": true,
            \"requires\": {
                \"end-of-stream\": \"^1.0.0\",
                \"inherits\": \"^2.0.1\",
                \"readable-stream\": \"^2.0.0\",
                \"stream-shift\": \"^1.0.0\"
            }
        },
        \"each-props\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/each-props/-/each-props-1.3.2.tgz\",
            \"integrity\": \"sha512-vV0Hem3zAGkJAyU7JSjixeU66rwdynTAa1vofCrSA5fEln+m67Az9CcnkVD776/fsN/UjIWmBDoNRS6t6G9RfA==\",
            \"dev\": true,
            \"requires\": {
                \"is-plain-object\": \"^2.0.1\",
                \"object.defaults\": \"^1.1.0\"
            }
        },
        \"easy-extender\": {
            \"version\": \"2.3.4\",
            \"resolved\": \"https://registry.npmjs.org/easy-extender/-/easy-extender-2.3.4.tgz\",
            \"integrity\": \"sha512-8cAwm6md1YTiPpOvDULYJL4ZS6WfM5/cTeVVh4JsvyYZAoqlRVUpHL9Gr5Fy7HA6xcSZicUia3DeAgO3Us8E+Q==\",
            \"dev\": true,
            \"requires\": {
                \"lodash\": \"^4.17.10\"
            }
        },
        \"eazy-logger\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/eazy-logger/-/eazy-logger-3.0.2.tgz\",
            \"integrity\": \"sha1-oyWqXlPROiIliJsqxBE7K5Y29Pw=\",
            \"dev\": true,
            \"requires\": {
                \"tfunk\": \"^3.0.1\"
            }
        },
        \"ee-first\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ee-first/-/ee-first-1.1.1.tgz\",
            \"integrity\": \"sha1-WQxhFWsK4vTwJVcyoViyZrxWsh0=\",
            \"dev\": true
        },
        \"encodeurl\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/encodeurl/-/encodeurl-1.0.2.tgz\",
            \"integrity\": \"sha1-rT/0yG7C0CkyL1oCw6mmBslbP1k=\",
            \"dev\": true
        },
        \"end-of-stream\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/end-of-stream/-/end-of-stream-1.4.1.tgz\",
            \"integrity\": \"sha512-1MkrZNvWTKCaigbn+W15elq2BB/L22nqrSY5DKlo3X6+vclJm8Bb5djXJBmEX6fS3+zCh/F4VBK5Z2KxJt4s2Q==\",
            \"dev\": true,
            \"requires\": {
                \"once\": \"^1.4.0\"
            }
        },
        \"engine.io\": {
            \"version\": \"3.2.1\",
            \"resolved\": \"https://registry.npmjs.org/engine.io/-/engine.io-3.2.1.tgz\",
            \"integrity\": \"sha512-+VlKzHzMhaU+GsCIg4AoXF1UdDFjHHwMmMKqMJNDNLlUlejz58FCy4LBqB2YVJskHGYl06BatYWKP2TVdVXE5w==\",
            \"dev\": true,
            \"requires\": {
                \"accepts\": \"~1.3.4\",
                \"base64id\": \"1.0.0\",
                \"cookie\": \"0.3.1\",
                \"debug\": \"~3.1.0\",
                \"engine.io-parser\": \"~2.1.0\",
                \"ws\": \"~3.3.1\"
            },
            \"dependencies\": {
                \"ws\": {
                    \"version\": \"3.3.3\",
                    \"resolved\": \"https://registry.npmjs.org/ws/-/ws-3.3.3.tgz\",
                    \"integrity\": \"sha512-nnWLa/NwZSt4KQJu51MYlCcSQ5g7INpOrOMt4XV8j4dqTXdmlUmSHQ8/oLC069ckre0fRsgfvsKwbTdtKLCDkA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"async-limiter\": \"~1.0.0\",
                        \"safe-buffer\": \"~5.1.0\",
                        \"ultron\": \"~1.1.0\"
                    }
                }
            }
        },
        \"engine.io-client\": {
            \"version\": \"3.3.2\",
            \"resolved\": \"https://registry.npmjs.org/engine.io-client/-/engine.io-client-3.3.2.tgz\",
            \"integrity\": \"sha512-y0CPINnhMvPuwtqXfsGuWE8BB66+B6wTtCofQDRecMQPYX3MYUZXFNKDhdrSe3EVjgOu4V3rxdeqN/Tr91IgbQ==\",
            \"dev\": true,
            \"requires\": {
                \"component-emitter\": \"1.2.1\",
                \"component-inherit\": \"0.0.3\",
                \"debug\": \"~3.1.0\",
                \"engine.io-parser\": \"~2.1.1\",
                \"has-cors\": \"1.1.0\",
                \"indexof\": \"0.0.1\",
                \"parseqs\": \"0.0.5\",
                \"parseuri\": \"0.0.5\",
                \"ws\": \"~6.1.0\",
                \"xmlhttprequest-ssl\": \"~1.5.4\",
                \"yeast\": \"0.1.2\"
            }
        },
        \"engine.io-parser\": {
            \"version\": \"2.1.3\",
            \"resolved\": \"https://registry.npmjs.org/engine.io-parser/-/engine.io-parser-2.1.3.tgz\",
            \"integrity\": \"sha512-6HXPre2O4Houl7c4g7Ic/XzPnHBvaEmN90vtRO9uLmwtRqQmTOw0QMevL1TOfL2Cpu1VzsaTmMotQgMdkzGkVA==\",
            \"dev\": true,
            \"requires\": {
                \"after\": \"0.8.2\",
                \"arraybuffer.slice\": \"~0.0.7\",
                \"base64-arraybuffer\": \"0.1.5\",
                \"blob\": \"0.0.5\",
                \"has-binary2\": \"~1.0.2\"
            }
        },
        \"error-ex\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/error-ex/-/error-ex-1.3.2.tgz\",
            \"integrity\": \"sha512-7dFHNmqeFSEt2ZBsCriorKnn3Z2pj+fd9kmI6QoWw4//DL+icEBfc0U7qJCisqrTsKTjw4fNFy2pW9OqStD84g==\",
            \"dev\": true,
            \"requires\": {
                \"is-arrayish\": \"^0.2.1\"
            }
        },
        \"es5-ext\": {
            \"version\": \"0.10.50\",
            \"resolved\": \"https://registry.npmjs.org/es5-ext/-/es5-ext-0.10.50.tgz\",
            \"integrity\": \"sha512-KMzZTPBkeQV/JcSQhI5/z6d9VWJ3EnQ194USTUwIYZ2ZbpN8+SGXQKt1h68EX44+qt+Fzr8DO17vnxrw7c3agw==\",
            \"dev\": true,
            \"requires\": {
                \"es6-iterator\": \"~2.0.3\",
                \"es6-symbol\": \"~3.1.1\",
                \"next-tick\": \"^1.0.0\"
            }
        },
        \"es6-iterator\": {
            \"version\": \"2.0.3\",
            \"resolved\": \"https://registry.npmjs.org/es6-iterator/-/es6-iterator-2.0.3.tgz\",
            \"integrity\": \"sha1-p96IkUGgWpSwhUQDstCg+/qY87c=\",
            \"dev\": true,
            \"requires\": {
                \"d\": \"1\",
                \"es5-ext\": \"^0.10.35\",
                \"es6-symbol\": \"^3.1.1\"
            }
        },
        \"es6-symbol\": {
            \"version\": \"3.1.1\",
            \"resolved\": \"https://registry.npmjs.org/es6-symbol/-/es6-symbol-3.1.1.tgz\",
            \"integrity\": \"sha1-vwDvT9q2uhtG7Le2KbTH7VcVzHc=\",
            \"dev\": true,
            \"requires\": {
                \"d\": \"1\",
                \"es5-ext\": \"~0.10.14\"
            }
        },
        \"es6-weak-map\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/es6-weak-map/-/es6-weak-map-2.0.2.tgz\",
            \"integrity\": \"sha1-XjqzIlH/0VOKH45f+hNXdy+S2W8=\",
            \"dev\": true,
            \"requires\": {
                \"d\": \"1\",
                \"es5-ext\": \"^0.10.14\",
                \"es6-iterator\": \"^2.0.1\",
                \"es6-symbol\": \"^3.1.1\"
            }
        },
        \"escape-html\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/escape-html/-/escape-html-1.0.3.tgz\",
            \"integrity\": \"sha1-Aljq5NPQwJdN4cFpGI7wBR0dGYg=\",
            \"dev\": true
        },
        \"escape-string-regexp\": {
            \"version\": \"1.0.5\",
            \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-1.0.5.tgz\",
            \"integrity\": \"sha1-G2HAViGQqN/2rjuyzwIAyhMLhtQ=\",
            \"dev\": true
        },
        \"etag\": {
            \"version\": \"1.8.1\",
            \"resolved\": \"https://registry.npmjs.org/etag/-/etag-1.8.1.tgz\",
            \"integrity\": \"sha1-Qa4u62XvpiJorr/qg6x9eSmbCIc=\",
            \"dev\": true
        },
        \"eventemitter3\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/eventemitter3/-/eventemitter3-1.2.0.tgz\",
            \"integrity\": \"sha1-HIaZHYFq0eUEdQ5zh0Ik7PO+xQg=\",
            \"dev\": true
        },
        \"expand-brackets\": {
            \"version\": \"2.1.4\",
            \"resolved\": \"https://registry.npmjs.org/expand-brackets/-/expand-brackets-2.1.4.tgz\",
            \"integrity\": \"sha1-t3c14xXOMPa27/D4OwQVGiJEliI=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"^2.3.3\",
                \"define-property\": \"^0.2.5\",
                \"extend-shallow\": \"^2.0.1\",
                \"posix-character-classes\": \"^0.1.0\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                },
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"expand-tilde\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/expand-tilde/-/expand-tilde-2.0.2.tgz\",
            \"integrity\": \"sha1-l+gBqgUt8CRU3kawK/YhZCzchQI=\",
            \"dev\": true,
            \"requires\": {
                \"homedir-polyfill\": \"^1.0.1\"
            }
        },
        \"extend\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/extend/-/extend-3.0.2.tgz\",
            \"integrity\": \"sha512-fjquC59cD7CyW6urNXK0FBufkZcoiGG80wTuPujX590cB5Ttln20E2UB4S/WARVqhXffZl2LNgS+gQdPIIim/g==\",
            \"dev\": true
        },
        \"extend-shallow\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-3.0.2.tgz\",
            \"integrity\": \"sha1-Jqcarwc7OfshJxcnRhMcJwQCjbg=\",
            \"dev\": true,
            \"requires\": {
                \"assign-symbols\": \"^1.0.0\",
                \"is-extendable\": \"^1.0.1\"
            },
            \"dependencies\": {
                \"is-extendable\": {
                    \"version\": \"1.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
                    \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-plain-object\": \"^2.0.4\"
                    }
                }
            }
        },
        \"extglob\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/extglob/-/extglob-2.0.4.tgz\",
            \"integrity\": \"sha512-Nmb6QXkELsuBr24CJSkilo6UHHgbekK5UiZgfE6UHD3Eb27YC6oD+bhcT+tJ6cl8dmsgdQxnWlcry8ksBIBLpw==\",
            \"dev\": true,
            \"requires\": {
                \"array-unique\": \"^0.3.2\",
                \"define-property\": \"^1.0.0\",
                \"expand-brackets\": \"^2.1.4\",
                \"extend-shallow\": \"^2.0.1\",
                \"fragment-cache\": \"^0.2.1\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
                    \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^1.0.0\"
                    }
                },
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                },
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"fancy-log\": {
            \"version\": \"1.3.3\",
            \"resolved\": \"https://registry.npmjs.org/fancy-log/-/fancy-log-1.3.3.tgz\",
            \"integrity\": \"sha512-k9oEhlyc0FrVh25qYuSELjr8oxsCoc4/LEZfg2iJJrfEk/tZL9bCoJE47gqAvI2m/AUjluCS4+3I0eTx8n3AEw==\",
            \"dev\": true,
            \"requires\": {
                \"ansi-gray\": \"^0.1.1\",
                \"color-support\": \"^1.1.3\",
                \"parse-node-version\": \"^1.0.0\",
                \"time-stamp\": \"^1.0.0\"
            }
        },
        \"fill-range\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/fill-range/-/fill-range-4.0.0.tgz\",
            \"integrity\": \"sha1-1USBHUKPmOsGpj3EAtJAPDKMOPc=\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^2.0.1\",
                \"is-number\": \"^3.0.0\",
                \"repeat-string\": \"^1.6.1\",
                \"to-regex-range\": \"^2.1.0\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"finalhandler\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/finalhandler/-/finalhandler-1.1.0.tgz\",
            \"integrity\": \"sha1-zgtoVbRYU+eRsvzGgARtiCU91/U=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"2.6.9\",
                \"encodeurl\": \"~1.0.1\",
                \"escape-html\": \"~1.0.3\",
                \"on-finished\": \"~2.3.0\",
                \"parseurl\": \"~1.3.2\",
                \"statuses\": \"~1.3.1\",
                \"unpipe\": \"~1.0.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                }
            }
        },
        \"find-up\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-1.1.2.tgz\",
            \"integrity\": \"sha1-ay6YIrGizgpgq2TWEOzK1TyyTQ8=\",
            \"dev\": true,
            \"requires\": {
                \"path-exists\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"findup-sync\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/findup-sync/-/findup-sync-3.0.0.tgz\",
            \"integrity\": \"sha512-YbffarhcicEhOrm4CtrwdKBdCuz576RLdhJDsIfvNtxUuhdRet1qZcsMjqbePtAseKdAnDyM/IyXbu7PRPRLYg==\",
            \"dev\": true,
            \"requires\": {
                \"detect-file\": \"^1.0.0\",
                \"is-glob\": \"^4.0.0\",
                \"micromatch\": \"^3.0.4\",
                \"resolve-dir\": \"^1.0.1\"
            }
        },
        \"fined\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/fined/-/fined-1.2.0.tgz\",
            \"integrity\": \"sha512-ZYDqPLGxDkDhDZBjZBb+oD1+j0rA4E0pXY50eplAAOPg2N/gUBSSk5IM1/QhPfyVo19lJ+CvXpqfvk+b2p/8Ng==\",
            \"dev\": true,
            \"requires\": {
                \"expand-tilde\": \"^2.0.2\",
                \"is-plain-object\": \"^2.0.3\",
                \"object.defaults\": \"^1.1.0\",
                \"object.pick\": \"^1.2.0\",
                \"parse-filepath\": \"^1.0.1\"
            }
        },
        \"flagged-respawn\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/flagged-respawn/-/flagged-respawn-1.0.1.tgz\",
            \"integrity\": \"sha512-lNaHNVymajmk0OJMBn8fVUAU1BtDeKIqKoVhk4xAALB57aALg6b4W0MfJ/cUE0g9YBXy5XhSlPIpYIJ7HaY/3Q==\",
            \"dev\": true
        },
        \"flush-write-stream\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/flush-write-stream/-/flush-write-stream-1.1.1.tgz\",
            \"integrity\": \"sha512-3Z4XhFZ3992uIq0XOqb9AreonueSYphE6oYbpt5+3u06JWklbsPkNv3ZKkP9Bz/r+1MWCaMoSQ28P85+1Yc77w==\",
            \"dev\": true,
            \"requires\": {
                \"inherits\": \"^2.0.3\",
                \"readable-stream\": \"^2.3.6\"
            }
        },
        \"follow-redirects\": {
            \"version\": \"1.5.10\",
            \"resolved\": \"https://registry.npmjs.org/follow-redirects/-/follow-redirects-1.5.10.tgz\",
            \"integrity\": \"sha512-0V5l4Cizzvqt5D44aTXbFZz+FtyXV1vrDN6qrelxtfYQKW0KO0W2T/hkE8xvGa/540LkZlkaUjO4ailYTFtHVQ==\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"=3.1.0\"
            }
        },
        \"for-in\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/for-in/-/for-in-1.0.2.tgz\",
            \"integrity\": \"sha1-gQaNKVqBQuwKxybG4iAMMPttXoA=\",
            \"dev\": true
        },
        \"for-own\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/for-own/-/for-own-1.0.0.tgz\",
            \"integrity\": \"sha1-xjMy9BXO3EsE2/5wz4NklMU8tEs=\",
            \"dev\": true,
            \"requires\": {
                \"for-in\": \"^1.0.1\"
            }
        },
        \"fragment-cache\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/fragment-cache/-/fragment-cache-0.2.1.tgz\",
            \"integrity\": \"sha1-QpD60n8T6Jvn8zeZxrxaCr//DRk=\",
            \"dev\": true,
            \"requires\": {
                \"map-cache\": \"^0.2.2\"
            }
        },
        \"fresh\": {
            \"version\": \"0.5.2\",
            \"resolved\": \"https://registry.npmjs.org/fresh/-/fresh-0.5.2.tgz\",
            \"integrity\": \"sha1-PYyt2Q2XZWn6g1qx+OSyOhBWBac=\",
            \"dev\": true
        },
        \"fs-extra\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/fs-extra/-/fs-extra-3.0.1.tgz\",
            \"integrity\": \"sha1-N5TzeMWLNC6n27sjCVEJxLO2IpE=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"jsonfile\": \"^3.0.0\",
                \"universalify\": \"^0.1.0\"
            }
        },
        \"fs-mkdirp-stream\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/fs-mkdirp-stream/-/fs-mkdirp-stream-1.0.0.tgz\",
            \"integrity\": \"sha1-C3gV/DIBxqaeFNuYzgmMFpNSWes=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.11\",
                \"through2\": \"^2.0.3\"
            }
        },
        \"fs.realpath\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/fs.realpath/-/fs.realpath-1.0.0.tgz\",
            \"integrity\": \"sha1-FQStJSMVjKpA20onh8sBQRmU6k8=\",
            \"dev\": true
        },
        \"fsevents\": {
            \"version\": \"1.2.9\",
            \"resolved\": \"https://registry.npmjs.org/fsevents/-/fsevents-1.2.9.tgz\",
            \"integrity\": \"sha512-oeyj2H3EjjonWcFjD5NvZNE9Rqe4UW+nQBU2HNeKw0koVLEFIhtyETyAakeAM3de7Z/SW5kcA+fZUait9EApnw==\",
            \"dev\": true,
            \"optional\": true,
            \"requires\": {
                \"nan\": \"^2.12.1\",
                \"node-pre-gyp\": \"^0.12.0\"
            },
            \"dependencies\": {
                \"abbrev\": {
                    \"version\": \"1.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"ansi-regex\": {
                    \"version\": \"2.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"aproba\": {
                    \"version\": \"1.2.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"are-we-there-yet\": {
                    \"version\": \"1.1.5\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"delegates\": \"^1.0.0\",
                        \"readable-stream\": \"^2.0.6\"
                    }
                },
                \"balanced-match\": {
                    \"version\": \"1.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"brace-expansion\": {
                    \"version\": \"1.1.11\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"balanced-match\": \"^1.0.0\",
                        \"concat-map\": \"0.0.1\"
                    }
                },
                \"chownr\": {
                    \"version\": \"1.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"code-point-at\": {
                    \"version\": \"1.1.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"concat-map\": {
                    \"version\": \"0.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"console-control-strings\": {
                    \"version\": \"1.1.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"core-util-is\": {
                    \"version\": \"1.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"debug\": {
                    \"version\": \"4.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"ms\": \"^2.1.1\"
                    }
                },
                \"deep-extend\": {
                    \"version\": \"0.6.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"delegates\": {
                    \"version\": \"1.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"detect-libc\": {
                    \"version\": \"1.0.3\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"fs-minipass\": {
                    \"version\": \"1.2.5\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"minipass\": \"^2.2.1\"
                    }
                },
                \"fs.realpath\": {
                    \"version\": \"1.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"gauge\": {
                    \"version\": \"2.7.4\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"aproba\": \"^1.0.3\",
                        \"console-control-strings\": \"^1.0.0\",
                        \"has-unicode\": \"^2.0.0\",
                        \"object-assign\": \"^4.1.0\",
                        \"signal-exit\": \"^3.0.0\",
                        \"string-width\": \"^1.0.1\",
                        \"strip-ansi\": \"^3.0.1\",
                        \"wide-align\": \"^1.1.0\"
                    }
                },
                \"glob\": {
                    \"version\": \"7.1.3\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"fs.realpath\": \"^1.0.0\",
                        \"inflight\": \"^1.0.4\",
                        \"inherits\": \"2\",
                        \"minimatch\": \"^3.0.4\",
                        \"once\": \"^1.3.0\",
                        \"path-is-absolute\": \"^1.0.0\"
                    }
                },
                \"has-unicode\": {
                    \"version\": \"2.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"iconv-lite\": {
                    \"version\": \"0.4.24\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"safer-buffer\": \">= 2.1.2 < 3\"
                    }
                },
                \"ignore-walk\": {
                    \"version\": \"3.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"minimatch\": \"^3.0.4\"
                    }
                },
                \"inflight\": {
                    \"version\": \"1.0.6\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"once\": \"^1.3.0\",
                        \"wrappy\": \"1\"
                    }
                },
                \"inherits\": {
                    \"version\": \"2.0.3\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"ini\": {
                    \"version\": \"1.3.5\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"is-fullwidth-code-point\": {
                    \"version\": \"1.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"number-is-nan\": \"^1.0.0\"
                    }
                },
                \"isarray\": {
                    \"version\": \"1.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"minimatch\": {
                    \"version\": \"3.0.4\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"brace-expansion\": \"^1.1.7\"
                    }
                },
                \"minimist\": {
                    \"version\": \"0.0.8\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"minipass\": {
                    \"version\": \"2.3.5\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"safe-buffer\": \"^5.1.2\",
                        \"yallist\": \"^3.0.0\"
                    }
                },
                \"minizlib\": {
                    \"version\": \"1.2.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"minipass\": \"^2.2.1\"
                    }
                },
                \"mkdirp\": {
                    \"version\": \"0.5.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"minimist\": \"0.0.8\"
                    }
                },
                \"ms\": {
                    \"version\": \"2.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"needle\": {
                    \"version\": \"2.3.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"debug\": \"^4.1.0\",
                        \"iconv-lite\": \"^0.4.4\",
                        \"sax\": \"^1.2.4\"
                    }
                },
                \"node-pre-gyp\": {
                    \"version\": \"0.12.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"detect-libc\": \"^1.0.2\",
                        \"mkdirp\": \"^0.5.1\",
                        \"needle\": \"^2.2.1\",
                        \"nopt\": \"^4.0.1\",
                        \"npm-packlist\": \"^1.1.6\",
                        \"npmlog\": \"^4.0.2\",
                        \"rc\": \"^1.2.7\",
                        \"rimraf\": \"^2.6.1\",
                        \"semver\": \"^5.3.0\",
                        \"tar\": \"^4\"
                    }
                },
                \"nopt\": {
                    \"version\": \"4.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"abbrev\": \"1\",
                        \"osenv\": \"^0.1.4\"
                    }
                },
                \"npm-bundled\": {
                    \"version\": \"1.0.6\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"npm-packlist\": {
                    \"version\": \"1.4.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"ignore-walk\": \"^3.0.1\",
                        \"npm-bundled\": \"^1.0.1\"
                    }
                },
                \"npmlog\": {
                    \"version\": \"4.1.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"are-we-there-yet\": \"~1.1.2\",
                        \"console-control-strings\": \"~1.1.0\",
                        \"gauge\": \"~2.7.3\",
                        \"set-blocking\": \"~2.0.0\"
                    }
                },
                \"number-is-nan\": {
                    \"version\": \"1.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"object-assign\": {
                    \"version\": \"4.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"once\": {
                    \"version\": \"1.4.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"wrappy\": \"1\"
                    }
                },
                \"os-homedir\": {
                    \"version\": \"1.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"os-tmpdir\": {
                    \"version\": \"1.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"osenv\": {
                    \"version\": \"0.1.5\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"os-homedir\": \"^1.0.0\",
                        \"os-tmpdir\": \"^1.0.0\"
                    }
                },
                \"path-is-absolute\": {
                    \"version\": \"1.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"process-nextick-args\": {
                    \"version\": \"2.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"rc\": {
                    \"version\": \"1.2.8\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"deep-extend\": \"^0.6.0\",
                        \"ini\": \"~1.3.0\",
                        \"minimist\": \"^1.2.0\",
                        \"strip-json-comments\": \"~2.0.1\"
                    },
                    \"dependencies\": {
                        \"minimist\": {
                            \"version\": \"1.2.0\",
                            \"bundled\": true,
                            \"dev\": true,
                            \"optional\": true
                        }
                    }
                },
                \"readable-stream\": {
                    \"version\": \"2.3.6\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"core-util-is\": \"~1.0.0\",
                        \"inherits\": \"~2.0.3\",
                        \"isarray\": \"~1.0.0\",
                        \"process-nextick-args\": \"~2.0.0\",
                        \"safe-buffer\": \"~5.1.1\",
                        \"string_decoder\": \"~1.1.1\",
                        \"util-deprecate\": \"~1.0.1\"
                    }
                },
                \"rimraf\": {
                    \"version\": \"2.6.3\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"glob\": \"^7.1.3\"
                    }
                },
                \"safe-buffer\": {
                    \"version\": \"5.1.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"safer-buffer\": {
                    \"version\": \"2.1.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"sax\": {
                    \"version\": \"1.2.4\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"semver\": {
                    \"version\": \"5.7.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"set-blocking\": {
                    \"version\": \"2.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"signal-exit\": {
                    \"version\": \"3.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"string-width\": {
                    \"version\": \"1.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"code-point-at\": \"^1.0.0\",
                        \"is-fullwidth-code-point\": \"^1.0.0\",
                        \"strip-ansi\": \"^3.0.0\"
                    }
                },
                \"string_decoder\": {
                    \"version\": \"1.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"safe-buffer\": \"~5.1.0\"
                    }
                },
                \"strip-ansi\": {
                    \"version\": \"3.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"ansi-regex\": \"^2.0.0\"
                    }
                },
                \"strip-json-comments\": {
                    \"version\": \"2.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"tar\": {
                    \"version\": \"4.4.8\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"chownr\": \"^1.1.1\",
                        \"fs-minipass\": \"^1.2.5\",
                        \"minipass\": \"^2.3.4\",
                        \"minizlib\": \"^1.1.1\",
                        \"mkdirp\": \"^0.5.0\",
                        \"safe-buffer\": \"^5.1.2\",
                        \"yallist\": \"^3.0.2\"
                    }
                },
                \"util-deprecate\": {
                    \"version\": \"1.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"wide-align\": {
                    \"version\": \"1.1.3\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"string-width\": \"^1.0.2 || 2\"
                    }
                },
                \"wrappy\": {
                    \"version\": \"1.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"yallist\": {
                    \"version\": \"3.0.3\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                }
            }
        },
        \"function-bind\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/function-bind/-/function-bind-1.1.1.tgz\",
            \"integrity\": \"sha512-yIovAzMX49sF8Yl58fSCWJ5svSLuaibPxXQJFLmBObTuCr0Mf1KiPopGM9NiFjiYBCbfaa2Fh6breQ6ANVTI0A==\",
            \"dev\": true
        },
        \"get-caller-file\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/get-caller-file/-/get-caller-file-1.0.3.tgz\",
            \"integrity\": \"sha512-3t6rVToeoZfYSGd8YoLFR2DJkiQrIiUrGcjvFX2mDw3bn6k2OtwHN0TNCLbBO+w8qTvimhDkv+LSscbJY1vE6w==\",
            \"dev\": true
        },
        \"get-value\": {
            \"version\": \"2.0.6\",
            \"resolved\": \"https://registry.npmjs.org/get-value/-/get-value-2.0.6.tgz\",
            \"integrity\": \"sha1-3BXKHGcjh8p2vTesCjlbogQqLCg=\",
            \"dev\": true
        },
        \"glob\": {
            \"version\": \"7.1.3\",
            \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.1.3.tgz\",
            \"integrity\": \"sha512-vcfuiIxogLV4DlGBHIUOwI0IbrJ8HWPc4MU7HzviGeNho/UJDfi6B5p3sHeWIQ0KGIU0Jpxi5ZHxemQfLkkAwQ==\",
            \"dev\": true,
            \"requires\": {
                \"fs.realpath\": \"^1.0.0\",
                \"inflight\": \"^1.0.4\",
                \"inherits\": \"2\",
                \"minimatch\": \"^3.0.4\",
                \"once\": \"^1.3.0\",
                \"path-is-absolute\": \"^1.0.0\"
            }
        },
        \"glob-parent\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-3.1.0.tgz\",
            \"integrity\": \"sha1-nmr2KZ2NO9K9QEMIMr0RPfkGxa4=\",
            \"dev\": true,
            \"requires\": {
                \"is-glob\": \"^3.1.0\",
                \"path-dirname\": \"^1.0.0\"
            },
            \"dependencies\": {
                \"is-glob\": {
                    \"version\": \"3.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-3.1.0.tgz\",
                    \"integrity\": \"sha1-e6WuJCF4BKxwcHuWkiVnSGzD6Eo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extglob\": \"^2.1.0\"
                    }
                }
            }
        },
        \"glob-stream\": {
            \"version\": \"6.1.0\",
            \"resolved\": \"https://registry.npmjs.org/glob-stream/-/glob-stream-6.1.0.tgz\",
            \"integrity\": \"sha1-cEXJlBOz65SIjYOrRtC0BMx73eQ=\",
            \"dev\": true,
            \"requires\": {
                \"extend\": \"^3.0.0\",
                \"glob\": \"^7.1.1\",
                \"glob-parent\": \"^3.1.0\",
                \"is-negated-glob\": \"^1.0.0\",
                \"ordered-read-streams\": \"^1.0.0\",
                \"pumpify\": \"^1.3.5\",
                \"readable-stream\": \"^2.1.5\",
                \"remove-trailing-separator\": \"^1.0.1\",
                \"to-absolute-glob\": \"^2.0.0\",
                \"unique-stream\": \"^2.0.2\"
            }
        },
        \"glob-watcher\": {
            \"version\": \"5.0.3\",
            \"resolved\": \"https://registry.npmjs.org/glob-watcher/-/glob-watcher-5.0.3.tgz\",
            \"integrity\": \"sha512-8tWsULNEPHKQ2MR4zXuzSmqbdyV5PtwwCaWSGQ1WwHsJ07ilNeN1JB8ntxhckbnpSHaf9dXFUHzIWvm1I13dsg==\",
            \"dev\": true,
            \"requires\": {
                \"anymatch\": \"^2.0.0\",
                \"async-done\": \"^1.2.0\",
                \"chokidar\": \"^2.0.0\",
                \"is-negated-glob\": \"^1.0.0\",
                \"just-debounce\": \"^1.0.0\",
                \"object.defaults\": \"^1.1.0\"
            }
        },
        \"global-modules\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/global-modules/-/global-modules-1.0.0.tgz\",
            \"integrity\": \"sha512-sKzpEkf11GpOFuw0Zzjzmt4B4UZwjOcG757PPvrfhxcLFbq0wpsgpOqxpxtxFiCG4DtG93M6XRVbF2oGdev7bg==\",
            \"dev\": true,
            \"requires\": {
                \"global-prefix\": \"^1.0.1\",
                \"is-windows\": \"^1.0.1\",
                \"resolve-dir\": \"^1.0.0\"
            }
        },
        \"global-prefix\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/global-prefix/-/global-prefix-1.0.2.tgz\",
            \"integrity\": \"sha1-2/dDxsFJklk8ZVVoy2btMsASLr4=\",
            \"dev\": true,
            \"requires\": {
                \"expand-tilde\": \"^2.0.2\",
                \"homedir-polyfill\": \"^1.0.1\",
                \"ini\": \"^1.3.4\",
                \"is-windows\": \"^1.0.1\",
                \"which\": \"^1.2.14\"
            }
        },
        \"globby\": {
            \"version\": \"6.1.0\",
            \"resolved\": \"https://registry.npmjs.org/globby/-/globby-6.1.0.tgz\",
            \"integrity\": \"sha1-9abXDoOV4hyFj7BInWTfAkJNUGw=\",
            \"dev\": true,
            \"requires\": {
                \"array-union\": \"^1.0.1\",
                \"glob\": \"^7.0.3\",
                \"object-assign\": \"^4.0.1\",
                \"pify\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"glogg\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/glogg/-/glogg-1.0.2.tgz\",
            \"integrity\": \"sha512-5mwUoSuBk44Y4EshyiqcH95ZntbDdTQqA3QYSrxmzj28Ai0vXBGMH1ApSANH14j2sIRtqCEyg6PfsuP7ElOEDA==\",
            \"dev\": true,
            \"requires\": {
                \"sparkles\": \"^1.0.0\"
            }
        },
        \"graceful-fs\": {
            \"version\": \"4.1.15\",
            \"resolved\": \"https://registry.npmjs.org/graceful-fs/-/graceful-fs-4.1.15.tgz\",
            \"integrity\": \"sha512-6uHUhOPEBgQ24HM+r6b/QwWfZq+yiFcipKFrOFiBEnWdy5sdzYoi+pJeQaPI5qOLRFqWmAXUPQNsielzdLoecA==\",
            \"dev\": true
        },
        \"gulp\": {
            \"version\": \"4.0.2\",
            \"resolved\": \"https://registry.npmjs.org/gulp/-/gulp-4.0.2.tgz\",
            \"integrity\": \"sha512-dvEs27SCZt2ibF29xYgmnwwCYZxdxhQ/+LFWlbAW8y7jt68L/65402Lz3+CKy0Ov4rOs+NERmDq7YlZaDqUIfA==\",
            \"dev\": true,
            \"requires\": {
                \"glob-watcher\": \"^5.0.3\",
                \"gulp-cli\": \"^2.2.0\",
                \"undertaker\": \"^1.2.1\",
                \"vinyl-fs\": \"^3.0.0\"
            },
            \"dependencies\": {
                \"gulp-cli\": {
                    \"version\": \"2.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/gulp-cli/-/gulp-cli-2.2.0.tgz\",
                    \"integrity\": \"sha512-rGs3bVYHdyJpLqR0TUBnlcZ1O5O++Zs4bA0ajm+zr3WFCfiSLjGwoCBqFs18wzN+ZxahT9DkOK5nDf26iDsWjA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-colors\": \"^1.0.1\",
                        \"archy\": \"^1.0.0\",
                        \"array-sort\": \"^1.0.0\",
                        \"color-support\": \"^1.1.3\",
                        \"concat-stream\": \"^1.6.0\",
                        \"copy-props\": \"^2.0.1\",
                        \"fancy-log\": \"^1.3.2\",
                        \"gulplog\": \"^1.0.0\",
                        \"interpret\": \"^1.1.0\",
                        \"isobject\": \"^3.0.1\",
                        \"liftoff\": \"^3.1.0\",
                        \"matchdep\": \"^2.0.0\",
                        \"mute-stdout\": \"^1.0.0\",
                        \"pretty-hrtime\": \"^1.0.0\",
                        \"replace-homedir\": \"^1.0.0\",
                        \"semver-greatest-satisfied-range\": \"^1.1.0\",
                        \"v8flags\": \"^3.0.1\",
                        \"yargs\": \"^7.1.0\"
                    }
                },
                \"yargs\": {
                    \"version\": \"7.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-7.1.0.tgz\",
                    \"integrity\": \"sha1-a6MY6xaWFyf10oT46gA+jWFU0Mg=\",
                    \"dev\": true,
                    \"requires\": {
                        \"camelcase\": \"^3.0.0\",
                        \"cliui\": \"^3.2.0\",
                        \"decamelize\": \"^1.1.1\",
                        \"get-caller-file\": \"^1.0.1\",
                        \"os-locale\": \"^1.4.0\",
                        \"read-pkg-up\": \"^1.0.1\",
                        \"require-directory\": \"^2.1.1\",
                        \"require-main-filename\": \"^1.0.1\",
                        \"set-blocking\": \"^2.0.0\",
                        \"string-width\": \"^1.0.2\",
                        \"which-module\": \"^1.0.0\",
                        \"y18n\": \"^3.2.1\",
                        \"yargs-parser\": \"^5.0.0\"
                    }
                },
                \"yargs-parser\": {
                    \"version\": \"5.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-5.0.0.tgz\",
                    \"integrity\": \"sha1-J17PDX/+Bcd+ZOfIbkzZS/DhIoo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"camelcase\": \"^3.0.0\"
                    }
                }
            }
        },
        \"gulplog\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/gulplog/-/gulplog-1.0.0.tgz\",
            \"integrity\": \"sha1-4oxNRdBey77YGDY86PnFkmIp/+U=\",
            \"dev\": true,
            \"requires\": {
                \"glogg\": \"^1.0.0\"
            }
        },
        \"has-ansi\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-ansi/-/has-ansi-2.0.0.tgz\",
            \"integrity\": \"sha1-NPUEnOHs3ysGSa8+8k5F7TVBbZE=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-regex\": \"^2.0.0\"
            }
        },
        \"has-binary2\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/has-binary2/-/has-binary2-1.0.3.tgz\",
            \"integrity\": \"sha512-G1LWKhDSvhGeAQ8mPVQlqNcOB2sJdwATtZKl2pDKKHfpf/rYj24lkinxf69blJbnsvtqqNU+L3SL50vzZhXOnw==\",
            \"dev\": true,
            \"requires\": {
                \"isarray\": \"2.0.1\"
            }
        },
        \"has-cors\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/has-cors/-/has-cors-1.1.0.tgz\",
            \"integrity\": \"sha1-XkdHk/fqmEPRu5nCPu9J/xJv/zk=\",
            \"dev\": true
        },
        \"has-symbols\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.0.tgz\",
            \"integrity\": \"sha1-uhqPGvKg/DllD1yFA2dwQSIGO0Q=\",
            \"dev\": true
        },
        \"has-value\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-value/-/has-value-1.0.0.tgz\",
            \"integrity\": \"sha1-GLKB2lhbHFxR3vJMkw7SmgvmsXc=\",
            \"dev\": true,
            \"requires\": {
                \"get-value\": \"^2.0.6\",
                \"has-values\": \"^1.0.0\",
                \"isobject\": \"^3.0.0\"
            }
        },
        \"has-values\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-values/-/has-values-1.0.0.tgz\",
            \"integrity\": \"sha1-lbC2P+whRmGab+V/51Yo1aOe/k8=\",
            \"dev\": true,
            \"requires\": {
                \"is-number\": \"^3.0.0\",
                \"kind-of\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-4.0.0.tgz\",
                    \"integrity\": \"sha1-IIE989cSkosgc3hpGkUGb65y3Vc=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"homedir-polyfill\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/homedir-polyfill/-/homedir-polyfill-1.0.3.tgz\",
            \"integrity\": \"sha512-eSmmWE5bZTK2Nou4g0AI3zZ9rswp7GRKoKXS1BLUkvPviOqs4YTN1djQIqrXy9k5gEtdLPy86JjRwsNM9tnDcA==\",
            \"dev\": true,
            \"requires\": {
                \"parse-passwd\": \"^1.0.0\"
            }
        },
        \"hosted-git-info\": {
            \"version\": \"2.7.1\",
            \"resolved\": \"https://registry.npmjs.org/hosted-git-info/-/hosted-git-info-2.7.1.tgz\",
            \"integrity\": \"sha512-7T/BxH19zbcCTa8XkMlbK5lTo1WtgkFi3GvdWEyNuc4Vex7/9Dqbnpsf4JMydcfj9HCg4zUWFTL3Za6lapg5/w==\",
            \"dev\": true
        },
        \"http-errors\": {
            \"version\": \"1.7.2\",
            \"resolved\": \"https://registry.npmjs.org/http-errors/-/http-errors-1.7.2.tgz\",
            \"integrity\": \"sha512-uUQBt3H/cSIVfch6i1EuPNy/YsRSOUBXTVfZ+yR7Zjez3qjBz6i9+i4zjNaoqcoFVI4lQJ5plg63TvGfRSDCRg==\",
            \"dev\": true,
            \"requires\": {
                \"depd\": \"~1.1.2\",
                \"inherits\": \"2.0.3\",
                \"setprototypeof\": \"1.1.1\",
                \"statuses\": \">= 1.5.0 < 2\",
                \"toidentifier\": \"1.0.0\"
            },
            \"dependencies\": {
                \"statuses\": {
                    \"version\": \"1.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.5.0.tgz\",
                    \"integrity\": \"sha1-Fhx9rBd2Wf2YEfQ3cfqZOBR4Yow=\",
                    \"dev\": true
                }
            }
        },
        \"http-proxy\": {
            \"version\": \"1.15.2\",
            \"resolved\": \"https://registry.npmjs.org/http-proxy/-/http-proxy-1.15.2.tgz\",
            \"integrity\": \"sha1-ZC/cr/5S00SNK9o7AHnpQJBk2jE=\",
            \"dev\": true,
            \"requires\": {
                \"eventemitter3\": \"1.x.x\",
                \"requires-port\": \"1.x.x\"
            }
        },
        \"iconv-lite\": {
            \"version\": \"0.4.24\",
            \"resolved\": \"https://registry.npmjs.org/iconv-lite/-/iconv-lite-0.4.24.tgz\",
            \"integrity\": \"sha512-v3MXnZAcvnywkTUEZomIActle7RXXeedOR31wwl7VlyoXO4Qi9arvSenNQWne1TcRwhCL1HwLI21bEqdpj8/rA==\",
            \"dev\": true,
            \"requires\": {
                \"safer-buffer\": \">= 2.1.2 < 3\"
            }
        },
        \"immutable\": {
            \"version\": \"3.8.2\",
            \"resolved\": \"https://registry.npmjs.org/immutable/-/immutable-3.8.2.tgz\",
            \"integrity\": \"sha1-wkOZUUVbs5kT2vKBN28VMOEErfM=\",
            \"dev\": true
        },
        \"indexof\": {
            \"version\": \"0.0.1\",
            \"resolved\": \"https://registry.npmjs.org/indexof/-/indexof-0.0.1.tgz\",
            \"integrity\": \"sha1-gtwzbSMrkGIXnQWrMpOmYFn9Q10=\",
            \"dev\": true
        },
        \"inflight\": {
            \"version\": \"1.0.6\",
            \"resolved\": \"https://registry.npmjs.org/inflight/-/inflight-1.0.6.tgz\",
            \"integrity\": \"sha1-Sb1jMdfQLQwJvJEKEHW6gWW1bfk=\",
            \"dev\": true,
            \"requires\": {
                \"once\": \"^1.3.0\",
                \"wrappy\": \"1\"
            }
        },
        \"inherits\": {
            \"version\": \"2.0.3\",
            \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.3.tgz\",
            \"integrity\": \"sha1-Yzwsg+PaQqUC9SRmAiSA9CCCYd4=\",
            \"dev\": true
        },
        \"ini\": {
            \"version\": \"1.3.5\",
            \"resolved\": \"https://registry.npmjs.org/ini/-/ini-1.3.5.tgz\",
            \"integrity\": \"sha512-RZY5huIKCMRWDUqZlEi72f/lmXKMvuszcMBduliQ3nnWbx9X/ZBQO7DijMEYS9EhHBb2qacRUMtC7svLwe0lcw==\",
            \"dev\": true
        },
        \"interpret\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/interpret/-/interpret-1.2.0.tgz\",
            \"integrity\": \"sha512-mT34yGKMNceBQUoVn7iCDKDntA7SC6gycMAWzGx1z/CMCTV7b2AAtXlo3nRyHZ1FelRkQbQjprHSYGwzLtkVbw==\",
            \"dev\": true
        },
        \"invert-kv\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/invert-kv/-/invert-kv-1.0.0.tgz\",
            \"integrity\": \"sha1-EEqOSqym09jNFXqO+L+rLXo//bY=\",
            \"dev\": true
        },
        \"is-absolute\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-absolute/-/is-absolute-1.0.0.tgz\",
            \"integrity\": \"sha512-dOWoqflvcydARa360Gvv18DZ/gRuHKi2NU/wU5X1ZFzdYfH29nkiNZsF3mp4OJ3H4yo9Mx8A/uAGNzpzPN3yBA==\",
            \"dev\": true,
            \"requires\": {
                \"is-relative\": \"^1.0.0\",
                \"is-windows\": \"^1.0.1\"
            }
        },
        \"is-accessor-descriptor\": {
            \"version\": \"0.1.6\",
            \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-0.1.6.tgz\",
            \"integrity\": \"sha1-qeEss66Nh2cn7u84Q/igiXtcmNY=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"is-arrayish\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/is-arrayish/-/is-arrayish-0.2.1.tgz\",
            \"integrity\": \"sha1-d8mYQFJ6qOyxqLppe4BkWnqSap0=\",
            \"dev\": true
        },
        \"is-binary-path\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/is-binary-path/-/is-binary-path-1.0.1.tgz\",
            \"integrity\": \"sha1-dfFmQrSA8YenEcgUFh/TpKdlWJg=\",
            \"dev\": true,
            \"requires\": {
                \"binary-extensions\": \"^1.0.0\"
            }
        },
        \"is-buffer\": {
            \"version\": \"1.1.6\",
            \"resolved\": \"https://registry.npmjs.org/is-buffer/-/is-buffer-1.1.6.tgz\",
            \"integrity\": \"sha512-NcdALwpXkTm5Zvvbk7owOUSvVvBKDgKP5/ewfXEznmQFfs4ZRmanOeKBTjRVjka3QFoN6XJ+9F3USqfHqTaU5w==\",
            \"dev\": true
        },
        \"is-data-descriptor\": {
            \"version\": \"0.1.4\",
            \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-0.1.4.tgz\",
            \"integrity\": \"sha1-C17mSDiOLIYCgueT8YVv7D8wG1Y=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"is-descriptor\": {
            \"version\": \"0.1.6\",
            \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-0.1.6.tgz\",
            \"integrity\": \"sha512-avDYr0SB3DwO9zsMov0gKCESFYqCnE4hq/4z3TdUlukEy5t9C0YRq7HLrsN52NAcqXKaepeCD0n+B0arnVG3Hg==\",
            \"dev\": true,
            \"requires\": {
                \"is-accessor-descriptor\": \"^0.1.6\",
                \"is-data-descriptor\": \"^0.1.4\",
                \"kind-of\": \"^5.0.0\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
                    \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
                    \"dev\": true
                }
            }
        },
        \"is-extendable\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
            \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
            \"dev\": true
        },
        \"is-extglob\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/is-extglob/-/is-extglob-2.1.1.tgz\",
            \"integrity\": \"sha1-qIwCU1eR8C7TfHahueqXc8gz+MI=\",
            \"dev\": true
        },
        \"is-fullwidth-code-point\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-1.0.0.tgz\",
            \"integrity\": \"sha1-754xOG8DGn8NZDr4L95QxFfvAMs=\",
            \"dev\": true,
            \"requires\": {
                \"number-is-nan\": \"^1.0.0\"
            }
        },
        \"is-glob\": {
            \"version\": \"4.0.1\",
            \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-4.0.1.tgz\",
            \"integrity\": \"sha512-5G0tKtBTFImOqDnLB2hG6Bp2qcKEFduo4tZu9MT/H6NQv/ghhy30o55ufafxJ/LdH79LLs2Kfrn85TLKyA7BUg==\",
            \"dev\": true,
            \"requires\": {
                \"is-extglob\": \"^2.1.1\"
            }
        },
        \"is-negated-glob\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-negated-glob/-/is-negated-glob-1.0.0.tgz\",
            \"integrity\": \"sha1-aRC8pdqMleeEtXUbl2z1oQ/uNtI=\",
            \"dev\": true
        },
        \"is-number\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-3.0.0.tgz\",
            \"integrity\": \"sha1-JP1iAaR4LPUFYcgQJ2r8fRLXEZU=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"is-number-like\": {
            \"version\": \"1.0.8\",
            \"resolved\": \"https://registry.npmjs.org/is-number-like/-/is-number-like-1.0.8.tgz\",
            \"integrity\": \"sha512-6rZi3ezCyFcn5L71ywzz2bS5b2Igl1En3eTlZlvKjpz1n3IZLAYMbKYAIQgFmEu0GENg92ziU/faEOA/aixjbA==\",
            \"dev\": true,
            \"requires\": {
                \"lodash.isfinite\": \"^3.3.2\"
            }
        },
        \"is-path-cwd\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/is-path-cwd/-/is-path-cwd-2.1.0.tgz\",
            \"integrity\": \"sha512-Sc5j3/YnM8tDeyCsVeKlm/0p95075DyLmDEIkSgQ7mXkrOX+uTCtmQFm0CYzVyJwcCCmO3k8qfJt17SxQwB5Zw==\",
            \"dev\": true
        },
        \"is-path-in-cwd\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/is-path-in-cwd/-/is-path-in-cwd-2.1.0.tgz\",
            \"integrity\": \"sha512-rNocXHgipO+rvnP6dk3zI20RpOtrAM/kzbB258Uw5BWr3TpXi861yzjo16Dn4hUox07iw5AyeMLHWsujkjzvRQ==\",
            \"dev\": true,
            \"requires\": {
                \"is-path-inside\": \"^2.1.0\"
            }
        },
        \"is-path-inside\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/is-path-inside/-/is-path-inside-2.1.0.tgz\",
            \"integrity\": \"sha512-wiyhTzfDWsvwAW53OBWF5zuvaOGlZ6PwYxAbPVDhpm+gM09xKQGjBq/8uYN12aDvMxnAnq3dxTyoSoRNmg5YFg==\",
            \"dev\": true,
            \"requires\": {
                \"path-is-inside\": \"^1.0.2\"
            }
        },
        \"is-plain-object\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/is-plain-object/-/is-plain-object-2.0.4.tgz\",
            \"integrity\": \"sha512-h5PpgXkWitc38BBMYawTYMWJHFZJVnBquFE57xFpjB8pJFiF6gZ+bU+WyI/yqXiFR5mdLsgYNaPe8uao6Uv9Og==\",
            \"dev\": true,
            \"requires\": {
                \"isobject\": \"^3.0.1\"
            }
        },
        \"is-relative\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-relative/-/is-relative-1.0.0.tgz\",
            \"integrity\": \"sha512-Kw/ReK0iqwKeu0MITLFuj0jbPAmEiOsIwyIXvvbfa6QfmN9pkD1M+8pdk7Rl/dTKbH34/XBFMbgD4iMJhLQbGA==\",
            \"dev\": true,
            \"requires\": {
                \"is-unc-path\": \"^1.0.0\"
            }
        },
        \"is-unc-path\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-unc-path/-/is-unc-path-1.0.0.tgz\",
            \"integrity\": \"sha512-mrGpVd0fs7WWLfVsStvgF6iEJnbjDFZh9/emhRDcGWTduTfNHd9CHeUwH3gYIjdbwo4On6hunkztwOaAw0yllQ==\",
            \"dev\": true,
            \"requires\": {
                \"unc-path-regex\": \"^0.1.2\"
            }
        },
        \"is-utf8\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/is-utf8/-/is-utf8-0.2.1.tgz\",
            \"integrity\": \"sha1-Sw2hRCEE0bM2NA6AeX6GXPOffXI=\",
            \"dev\": true
        },
        \"is-valid-glob\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-valid-glob/-/is-valid-glob-1.0.0.tgz\",
            \"integrity\": \"sha1-Kb8+/3Ab4tTTFdusw5vDn+j2Aao=\",
            \"dev\": true
        },
        \"is-windows\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/is-windows/-/is-windows-1.0.2.tgz\",
            \"integrity\": \"sha512-eXK1UInq2bPmjyX6e3VHIzMLobc4J94i4AWn+Hpq3OU5KkrRC96OAcR3PRJ/pGu6m8TRnBHP9dkXQVsT/COVIA==\",
            \"dev\": true
        },
        \"is-wsl\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/is-wsl/-/is-wsl-1.1.0.tgz\",
            \"integrity\": \"sha1-HxbkqiKwTRM2tmGIpmrzxgDDpm0=\",
            \"dev\": true
        },
        \"isarray\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-2.0.1.tgz\",
            \"integrity\": \"sha1-o32U7ZzaLVmGXJ92/llu4fM4dB4=\",
            \"dev\": true
        },
        \"isexe\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/isexe/-/isexe-2.0.0.tgz\",
            \"integrity\": \"sha1-6PvzdNxVb/iUehDcsFctYz8s+hA=\",
            \"dev\": true
        },
        \"isobject\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/isobject/-/isobject-3.0.1.tgz\",
            \"integrity\": \"sha1-TkMekrEalzFjaqH5yNHMvP2reN8=\",
            \"dev\": true
        },
        \"jquery\": {
            \"version\": \"3.4.1\",
            \"resolved\": \"https://registry.npmjs.org/jquery/-/jquery-3.4.1.tgz\",
            \"integrity\": \"sha512-36+AdBzCL+y6qjw5Tx7HgzeGCzC81MDDgaUP8ld2zhx58HdqXGoBd+tHdrBMiyjGQs0Hxs/MLZTu/eHNJJuWPw==\"
        },
        \"json-stable-stringify-without-jsonify\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/json-stable-stringify-without-jsonify/-/json-stable-stringify-without-jsonify-1.0.1.tgz\",
            \"integrity\": \"sha1-nbe1lJatPzz+8wp1FC0tkwrXJlE=\",
            \"dev\": true
        },
        \"jsonfile\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/jsonfile/-/jsonfile-3.0.1.tgz\",
            \"integrity\": \"sha1-pezG9l9T9mLEQVx2daAzHQmS7GY=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.6\"
            }
        },
        \"just-debounce\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/just-debounce/-/just-debounce-1.0.0.tgz\",
            \"integrity\": \"sha1-h/zPrv/AtozRnVX2cilD+SnqNeo=\",
            \"dev\": true
        },
        \"kind-of\": {
            \"version\": \"6.0.2\",
            \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-6.0.2.tgz\",
            \"integrity\": \"sha512-s5kLOcnH0XqDO+FvuaLX8DDjZ18CGFk7VygH40QoKPUQhW4e2rvM0rwUq0t8IQDOwYSeLK01U90OjzBTme2QqA==\",
            \"dev\": true
        },
        \"last-run\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/last-run/-/last-run-1.1.1.tgz\",
            \"integrity\": \"sha1-RblpQsF7HHnHchmCWbqUO+v4yls=\",
            \"dev\": true,
            \"requires\": {
                \"default-resolution\": \"^2.0.0\",
                \"es6-weak-map\": \"^2.0.1\"
            }
        },
        \"lazystream\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lazystream/-/lazystream-1.0.0.tgz\",
            \"integrity\": \"sha1-9plf4PggOS9hOWvolGJAe7dxaOQ=\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"^2.0.5\"
            }
        },
        \"lcid\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lcid/-/lcid-1.0.0.tgz\",
            \"integrity\": \"sha1-MIrMr6C8SDo4Z7S28rlQYlHRuDU=\",
            \"dev\": true,
            \"requires\": {
                \"invert-kv\": \"^1.0.0\"
            }
        },
        \"lead\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lead/-/lead-1.0.0.tgz\",
            \"integrity\": \"sha1-bxT5mje+Op3XhPVJVpDlkDRm7kI=\",
            \"dev\": true,
            \"requires\": {
                \"flush-write-stream\": \"^1.0.2\"
            }
        },
        \"liftoff\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/liftoff/-/liftoff-3.1.0.tgz\",
            \"integrity\": \"sha512-DlIPlJUkCV0Ips2zf2pJP0unEoT1kwYhiiPUGF3s/jtxTCjziNLoiVVh+jqWOWeFi6mmwQ5fNxvAUyPad4Dfog==\",
            \"dev\": true,
            \"requires\": {
                \"extend\": \"^3.0.0\",
                \"findup-sync\": \"^3.0.0\",
                \"fined\": \"^1.0.1\",
                \"flagged-respawn\": \"^1.0.0\",
                \"is-plain-object\": \"^2.0.4\",
                \"object.map\": \"^1.0.0\",
                \"rechoir\": \"^0.6.2\",
                \"resolve\": \"^1.1.7\"
            }
        },
        \"limiter\": {
            \"version\": \"1.1.4\",
            \"resolved\": \"https://registry.npmjs.org/limiter/-/limiter-1.1.4.tgz\",
            \"integrity\": \"sha512-XCpr5bElgDI65vVgstP8TWjv6/QKWm9GU5UG0Pr5sLQ3QLo8NVKsioe+Jed5/3vFOe3IQuqE7DKwTvKQkjTHvg==\",
            \"dev\": true
        },
        \"load-json-file\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/load-json-file/-/load-json-file-1.1.0.tgz\",
            \"integrity\": \"sha1-lWkFcI1YtLq0wiYbBPWfMcmTdMA=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"parse-json\": \"^2.2.0\",
                \"pify\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\",
                \"strip-bom\": \"^2.0.0\"
            }
        },
        \"localtunnel\": {
            \"version\": \"1.9.2\",
            \"resolved\": \"https://registry.npmjs.org/localtunnel/-/localtunnel-1.9.2.tgz\",
            \"integrity\": \"sha512-NEKF7bDJE9U3xzJu3kbayF0WTvng6Pww7tzqNb/XtEARYwqw7CKEX7BvOMg98FtE9es2CRizl61gkV3hS8dqYg==\",
            \"dev\": true,
            \"requires\": {
                \"axios\": \"0.19.0\",
                \"debug\": \"4.1.1\",
                \"openurl\": \"1.1.1\",
                \"yargs\": \"6.6.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"4.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.1.1.tgz\",
                    \"integrity\": \"sha512-pYAIzeRo8J6KPEaJ0VWOh5Pzkbw/RetuzehGM7QRRX5he4fPHx2rdKMB256ehJCkX+XRQm16eZLqLNS8RSZXZw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"^2.1.1\"
                    }
                },
                \"ms\": {
                    \"version\": \"2.1.2\",
                    \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
                    \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
                    \"dev\": true
                },
                \"yargs\": {
                    \"version\": \"6.6.0\",
                    \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-6.6.0.tgz\",
                    \"integrity\": \"sha1-eC7CHvQDNF+DCoCMo9UTr1YGUgg=\",
                    \"dev\": true,
                    \"requires\": {
                        \"camelcase\": \"^3.0.0\",
                        \"cliui\": \"^3.2.0\",
                        \"decamelize\": \"^1.1.1\",
                        \"get-caller-file\": \"^1.0.1\",
                        \"os-locale\": \"^1.4.0\",
                        \"read-pkg-up\": \"^1.0.1\",
                        \"require-directory\": \"^2.1.1\",
                        \"require-main-filename\": \"^1.0.1\",
                        \"set-blocking\": \"^2.0.0\",
                        \"string-width\": \"^1.0.2\",
                        \"which-module\": \"^1.0.0\",
                        \"y18n\": \"^3.2.1\",
                        \"yargs-parser\": \"^4.2.0\"
                    }
                }
            }
        },
        \"lodash\": {
            \"version\": \"4.17.11\",
            \"resolved\": \"https://registry.npmjs.org/lodash/-/lodash-4.17.11.tgz\",
            \"integrity\": \"sha512-cQKh8igo5QUhZ7lg38DYWAxMvjSAKG0A8wGSVimP07SIUEK2UO+arSRKbRZWtelMtN5V0Hkwh5ryOto/SshYIg==\",
            \"dev\": true
        },
        \"lodash.isfinite\": {
            \"version\": \"3.3.2\",
            \"resolved\": \"https://registry.npmjs.org/lodash.isfinite/-/lodash.isfinite-3.3.2.tgz\",
            \"integrity\": \"sha1-+4m2WpqAKBgz8LdHizpRBPiY67M=\",
            \"dev\": true
        },
        \"make-iterator\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/make-iterator/-/make-iterator-1.0.1.tgz\",
            \"integrity\": \"sha512-pxiuXh0iVEq7VM7KMIhs5gxsfxCux2URptUQaXo4iZZJxBAzTPOLE2BumO5dbfVYq/hBJFBR/a1mFDmOx5AGmw==\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^6.0.2\"
            }
        },
        \"map-cache\": {
            \"version\": \"0.2.2\",
            \"resolved\": \"https://registry.npmjs.org/map-cache/-/map-cache-0.2.2.tgz\",
            \"integrity\": \"sha1-wyq9C9ZSXZsFFkW7TyasXcmKDb8=\",
            \"dev\": true
        },
        \"map-visit\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/map-visit/-/map-visit-1.0.0.tgz\",
            \"integrity\": \"sha1-7Nyo8TFE5mDxtb1B8S80edmN+48=\",
            \"dev\": true,
            \"requires\": {
                \"object-visit\": \"^1.0.0\"
            }
        },
        \"matchdep\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/matchdep/-/matchdep-2.0.0.tgz\",
            \"integrity\": \"sha1-xvNINKDY28OzfCfui7yyfHd1WC4=\",
            \"dev\": true,
            \"requires\": {
                \"findup-sync\": \"^2.0.0\",
                \"micromatch\": \"^3.0.4\",
                \"resolve\": \"^1.4.0\",
                \"stack-trace\": \"0.0.10\"
            },
            \"dependencies\": {
                \"findup-sync\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/findup-sync/-/findup-sync-2.0.0.tgz\",
                    \"integrity\": \"sha1-kyaxSIwi0aYIhlCoaQGy2akKLLw=\",
                    \"dev\": true,
                    \"requires\": {
                        \"detect-file\": \"^1.0.0\",
                        \"is-glob\": \"^3.1.0\",
                        \"micromatch\": \"^3.0.4\",
                        \"resolve-dir\": \"^1.0.1\"
                    }
                },
                \"is-glob\": {
                    \"version\": \"3.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-3.1.0.tgz\",
                    \"integrity\": \"sha1-e6WuJCF4BKxwcHuWkiVnSGzD6Eo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extglob\": \"^2.1.0\"
                    }
                }
            }
        },
        \"merge-stream\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/merge-stream/-/merge-stream-2.0.0.tgz\",
            \"integrity\": \"sha512-abv/qOcuPfk3URPfDzmZU1LKmuw8kT+0nIHvKrKgFrwifol/doWcdA4ZqsWQ8ENrFKkd67Mfpo/LovbIUsbt3w==\",
            \"dev\": true
        },
        \"micromatch\": {
            \"version\": \"3.1.10\",
            \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-3.1.10.tgz\",
            \"integrity\": \"sha512-MWikgl9n9M3w+bpsY3He8L+w9eF9338xRl8IAO5viDizwSzziFEyUzo2xrrloB64ADbTf8uA8vRqqttDTOmccg==\",
            \"dev\": true,
            \"requires\": {
                \"arr-diff\": \"^4.0.0\",
                \"array-unique\": \"^0.3.2\",
                \"braces\": \"^2.3.1\",
                \"define-property\": \"^2.0.2\",
                \"extend-shallow\": \"^3.0.2\",
                \"extglob\": \"^2.0.4\",
                \"fragment-cache\": \"^0.2.1\",
                \"kind-of\": \"^6.0.2\",
                \"nanomatch\": \"^1.2.9\",
                \"object.pick\": \"^1.3.0\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.2\"
            }
        },
        \"mime\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/mime/-/mime-1.4.1.tgz\",
            \"integrity\": \"sha512-KI1+qOZu5DcW6wayYHSzR/tXKCDC5Om4s1z2QJjDULzLcmf3DvzS7oluY4HCTrc+9FiKmWUgeNLg7W3uIQvxtQ==\",
            \"dev\": true
        },
        \"mime-db\": {
            \"version\": \"1.40.0\",
            \"resolved\": \"https://registry.npmjs.org/mime-db/-/mime-db-1.40.0.tgz\",
            \"integrity\": \"sha512-jYdeOMPy9vnxEqFRRo6ZvTZ8d9oPb+k18PKoYNYUe2stVEBPPwsln/qWzdbmaIvnhZ9v2P+CuecK+fpUfsV2mA==\",
            \"dev\": true
        },
        \"mime-types\": {
            \"version\": \"2.1.24\",
            \"resolved\": \"https://registry.npmjs.org/mime-types/-/mime-types-2.1.24.tgz\",
            \"integrity\": \"sha512-WaFHS3MCl5fapm3oLxU4eYDw77IQM2ACcxQ9RIxfaC3ooc6PFuBMGZZsYpvoXS5D5QTWPieo1jjLdAm3TBP3cQ==\",
            \"dev\": true,
            \"requires\": {
                \"mime-db\": \"1.40.0\"
            }
        },
        \"minimatch\": {
            \"version\": \"3.0.4\",
            \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.0.4.tgz\",
            \"integrity\": \"sha512-yJHVQEhyqPLUTgt9B83PXu6W3rx4MvvHvSUvToogpwoGDOUQ+yDrR0HRot+yOCdCO7u4hX3pWft6kWBBcqh0UA==\",
            \"dev\": true,
            \"requires\": {
                \"brace-expansion\": \"^1.1.7\"
            }
        },
        \"mitt\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/mitt/-/mitt-1.1.3.tgz\",
            \"integrity\": \"sha512-mUDCnVNsAi+eD6qA0HkRkwYczbLHJ49z17BGe2PYRhZL4wpZUFZGJHU7/5tmvohoma+Hdn0Vh/oJTiPEmgSruA==\",
            \"dev\": true
        },
        \"mixin-deep\": {
            \"version\": \"1.3.1\",
            \"resolved\": \"https://registry.npmjs.org/mixin-deep/-/mixin-deep-1.3.1.tgz\",
            \"integrity\": \"sha512-8ZItLHeEgaqEvd5lYBXfm4EZSFCX29Jb9K+lAHhDKzReKBQKj3R+7NOF6tjqYi9t4oI8VUfaWITJQm86wnXGNQ==\",
            \"dev\": true,
            \"requires\": {
                \"for-in\": \"^1.0.2\",
                \"is-extendable\": \"^1.0.1\"
            },
            \"dependencies\": {
                \"is-extendable\": {
                    \"version\": \"1.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
                    \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-plain-object\": \"^2.0.4\"
                    }
                }
            }
        },
        \"ms\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
            \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
            \"dev\": true
        },
        \"mute-stdout\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/mute-stdout/-/mute-stdout-1.0.1.tgz\",
            \"integrity\": \"sha512-kDcwXR4PS7caBpuRYYBUz9iVixUk3anO3f5OYFiIPwK/20vCzKCHyKoulbiDY1S53zD2bxUpxN/IJ+TnXjfvxg==\",
            \"dev\": true
        },
        \"nan\": {
            \"version\": \"2.13.2\",
            \"resolved\": \"https://registry.npmjs.org/nan/-/nan-2.13.2.tgz\",
            \"integrity\": \"sha512-TghvYc72wlMGMVMluVo9WRJc0mB8KxxF/gZ4YYFy7V2ZQX9l7rgbPg7vjS9mt6U5HXODVFVI2bOduCzwOMv/lw==\",
            \"dev\": true,
            \"optional\": true
        },
        \"nanomatch\": {
            \"version\": \"1.2.13\",
            \"resolved\": \"https://registry.npmjs.org/nanomatch/-/nanomatch-1.2.13.tgz\",
            \"integrity\": \"sha512-fpoe2T0RbHwBTBUOftAfBPaDEi06ufaUai0mE6Yn1kacc3SnTErfb/h+X94VXzI64rKFHYImXSvdwGGCmwOqCA==\",
            \"dev\": true,
            \"requires\": {
                \"arr-diff\": \"^4.0.0\",
                \"array-unique\": \"^0.3.2\",
                \"define-property\": \"^2.0.2\",
                \"extend-shallow\": \"^3.0.2\",
                \"fragment-cache\": \"^0.2.1\",
                \"is-windows\": \"^1.0.2\",
                \"kind-of\": \"^6.0.2\",
                \"object.pick\": \"^1.3.0\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.1\"
            }
        },
        \"negotiator\": {
            \"version\": \"0.6.2\",
            \"resolved\": \"https://registry.npmjs.org/negotiator/-/negotiator-0.6.2.tgz\",
            \"integrity\": \"sha512-hZXc7K2e+PgeI1eDBe/10Ard4ekbfrrqG8Ep+8Jmf4JID2bNg7NvCPOZN+kfF574pFQI7mum2AUqDidoKqcTOw==\",
            \"dev\": true
        },
        \"next-tick\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/next-tick/-/next-tick-1.0.0.tgz\",
            \"integrity\": \"sha1-yobR/ogoFpsBICCOPchCS524NCw=\",
            \"dev\": true
        },
        \"normalize-package-data\": {
            \"version\": \"2.5.0\",
            \"resolved\": \"https://registry.npmjs.org/normalize-package-data/-/normalize-package-data-2.5.0.tgz\",
            \"integrity\": \"sha512-/5CMN3T0R4XTj4DcGaexo+roZSdSFW/0AOOTROrjxzCG1wrWXEsGbRKevjlIL+ZDE4sZlJr5ED4YW0yqmkK+eA==\",
            \"dev\": true,
            \"requires\": {
                \"hosted-git-info\": \"^2.1.4\",
                \"resolve\": \"^1.10.0\",
                \"semver\": \"2 || 3 || 4 || 5\",
                \"validate-npm-package-license\": \"^3.0.1\"
            }
        },
        \"normalize-path\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-3.0.0.tgz\",
            \"integrity\": \"sha512-6eZs5Ls3WtCisHWp9S2GUy8dqkpGi4BVSz3GaqiE6ezub0512ESztXUwUB6C6IKbQkY2Pnb/mD4WYojCRwcwLA==\",
            \"dev\": true
        },
        \"now-and-later\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/now-and-later/-/now-and-later-2.0.1.tgz\",
            \"integrity\": \"sha512-KGvQ0cB70AQfg107Xvs/Fbu+dGmZoTRJp2TaPwcwQm3/7PteUyN2BCgk8KBMPGBUXZdVwyWS8fDCGFygBm19UQ==\",
            \"dev\": true,
            \"requires\": {
                \"once\": \"^1.3.2\"
            }
        },
        \"number-is-nan\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/number-is-nan/-/number-is-nan-1.0.1.tgz\",
            \"integrity\": \"sha1-CXtgK1NCKlIsGvuHkDGDNpQaAR0=\",
            \"dev\": true
        },
        \"object-assign\": {
            \"version\": \"4.1.1\",
            \"resolved\": \"https://registry.npmjs.org/object-assign/-/object-assign-4.1.1.tgz\",
            \"integrity\": \"sha1-IQmtx5ZYh8/AXLvUQsrIv7s2CGM=\",
            \"dev\": true
        },
        \"object-component\": {
            \"version\": \"0.0.3\",
            \"resolved\": \"https://registry.npmjs.org/object-component/-/object-component-0.0.3.tgz\",
            \"integrity\": \"sha1-8MaapQ78lbhmwYb0AKM3acsvEpE=\",
            \"dev\": true
        },
        \"object-copy\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/object-copy/-/object-copy-0.1.0.tgz\",
            \"integrity\": \"sha1-fn2Fi3gb18mRpBupde04EnVOmYw=\",
            \"dev\": true,
            \"requires\": {
                \"copy-descriptor\": \"^0.1.0\",
                \"define-property\": \"^0.2.5\",
                \"kind-of\": \"^3.0.3\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                },
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"object-keys\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/object-keys/-/object-keys-1.1.1.tgz\",
            \"integrity\": \"sha512-NuAESUOUMrlIXOfHKzD6bpPu3tYt3xvjNdRIQ+FeT0lNb4K8WR70CaDxhuNguS2XG+GjkyMwOzsN5ZktImfhLA==\",
            \"dev\": true
        },
        \"object-path\": {
            \"version\": \"0.9.2\",
            \"resolved\": \"https://registry.npmjs.org/object-path/-/object-path-0.9.2.tgz\",
            \"integrity\": \"sha1-D9mnT8X60a45aLWGvaXGMr1sBaU=\",
            \"dev\": true
        },
        \"object-visit\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/object-visit/-/object-visit-1.0.1.tgz\",
            \"integrity\": \"sha1-95xEk68MU3e1n+OdOV5BBC3QRbs=\",
            \"dev\": true,
            \"requires\": {
                \"isobject\": \"^3.0.0\"
            }
        },
        \"object.assign\": {
            \"version\": \"4.1.0\",
            \"resolved\": \"https://registry.npmjs.org/object.assign/-/object.assign-4.1.0.tgz\",
            \"integrity\": \"sha512-exHJeq6kBKj58mqGyTQ9DFvrZC/eR6OwxzoM9YRoGBqrXYonaFyGiFMuc9VZrXf7DarreEwMpurG3dd+CNyW5w==\",
            \"dev\": true,
            \"requires\": {
                \"define-properties\": \"^1.1.2\",
                \"function-bind\": \"^1.1.1\",
                \"has-symbols\": \"^1.0.0\",
                \"object-keys\": \"^1.0.11\"
            }
        },
        \"object.defaults\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/object.defaults/-/object.defaults-1.1.0.tgz\",
            \"integrity\": \"sha1-On+GgzS0B96gbaFtiNXNKeQ1/s8=\",
            \"dev\": true,
            \"requires\": {
                \"array-each\": \"^1.0.1\",
                \"array-slice\": \"^1.0.0\",
                \"for-own\": \"^1.0.0\",
                \"isobject\": \"^3.0.0\"
            }
        },
        \"object.map\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/object.map/-/object.map-1.0.1.tgz\",
            \"integrity\": \"sha1-z4Plncj8wK1fQlDh94s7gb2AHTc=\",
            \"dev\": true,
            \"requires\": {
                \"for-own\": \"^1.0.0\",
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"object.pick\": {
            \"version\": \"1.3.0\",
            \"resolved\": \"https://registry.npmjs.org/object.pick/-/object.pick-1.3.0.tgz\",
            \"integrity\": \"sha1-h6EKxMFpS9Lhy/U1kaZhQftd10c=\",
            \"dev\": true,
            \"requires\": {
                \"isobject\": \"^3.0.1\"
            }
        },
        \"object.reduce\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/object.reduce/-/object.reduce-1.0.1.tgz\",
            \"integrity\": \"sha1-b+NI8qx/oPlcpiEiZZkJaCW7A60=\",
            \"dev\": true,
            \"requires\": {
                \"for-own\": \"^1.0.0\",
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"on-finished\": {
            \"version\": \"2.3.0\",
            \"resolved\": \"https://registry.npmjs.org/on-finished/-/on-finished-2.3.0.tgz\",
            \"integrity\": \"sha1-IPEzZIGwg811M3mSoWlxqi2QaUc=\",
            \"dev\": true,
            \"requires\": {
                \"ee-first\": \"1.1.1\"
            }
        },
        \"once\": {
            \"version\": \"1.4.0\",
            \"resolved\": \"https://registry.npmjs.org/once/-/once-1.4.0.tgz\",
            \"integrity\": \"sha1-WDsap3WWHUsROsF9nFC6753Xa9E=\",
            \"dev\": true,
            \"requires\": {
                \"wrappy\": \"1\"
            }
        },
        \"openurl\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/openurl/-/openurl-1.1.1.tgz\",
            \"integrity\": \"sha1-OHW0sO96UsFW8NtB1GCduw+Us4c=\",
            \"dev\": true
        },
        \"opn\": {
            \"version\": \"5.3.0\",
            \"resolved\": \"https://registry.npmjs.org/opn/-/opn-5.3.0.tgz\",
            \"integrity\": \"sha512-bYJHo/LOmoTd+pfiYhfZDnf9zekVJrY+cnS2a5F2x+w5ppvTqObojTP7WiFG+kVZs9Inw+qQ/lw7TroWwhdd2g==\",
            \"dev\": true,
            \"requires\": {
                \"is-wsl\": \"^1.1.0\"
            }
        },
        \"ordered-read-streams\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/ordered-read-streams/-/ordered-read-streams-1.0.1.tgz\",
            \"integrity\": \"sha1-d8DLN8QVJdZBZtmQ/61+xqDhNj4=\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"^2.0.1\"
            }
        },
        \"os-locale\": {
            \"version\": \"1.4.0\",
            \"resolved\": \"https://registry.npmjs.org/os-locale/-/os-locale-1.4.0.tgz\",
            \"integrity\": \"sha1-IPnxeuKe00XoveWDsT0gCYA8FNk=\",
            \"dev\": true,
            \"requires\": {
                \"lcid\": \"^1.0.0\"
            }
        },
        \"p-map\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/p-map/-/p-map-2.1.0.tgz\",
            \"integrity\": \"sha512-y3b8Kpd8OAN444hxfBbFfj1FY/RjtTd8tzYwhUqNYXx0fXx2iX4maP4Qr6qhIKbQXI02wTLAda4fYUbDagTUFw==\",
            \"dev\": true
        },
        \"parse-filepath\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/parse-filepath/-/parse-filepath-1.0.2.tgz\",
            \"integrity\": \"sha1-pjISf1Oq89FYdvWHLz/6x2PWyJE=\",
            \"dev\": true,
            \"requires\": {
                \"is-absolute\": \"^1.0.0\",
                \"map-cache\": \"^0.2.0\",
                \"path-root\": \"^0.1.1\"
            }
        },
        \"parse-json\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/parse-json/-/parse-json-2.2.0.tgz\",
            \"integrity\": \"sha1-9ID0BDTvgHQfhGkJn43qGPVaTck=\",
            \"dev\": true,
            \"requires\": {
                \"error-ex\": \"^1.2.0\"
            }
        },
        \"parse-node-version\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/parse-node-version/-/parse-node-version-1.0.1.tgz\",
            \"integrity\": \"sha512-3YHlOa/JgH6Mnpr05jP9eDG254US9ek25LyIxZlDItp2iJtwyaXQb57lBYLdT3MowkUFYEV2XXNAYIPlESvJlA==\",
            \"dev\": true
        },
        \"parse-passwd\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/parse-passwd/-/parse-passwd-1.0.0.tgz\",
            \"integrity\": \"sha1-bVuTSkVpk7I9N/QKOC1vFmao5cY=\",
            \"dev\": true
        },
        \"parseqs\": {
            \"version\": \"0.0.5\",
            \"resolved\": \"https://registry.npmjs.org/parseqs/-/parseqs-0.0.5.tgz\",
            \"integrity\": \"sha1-1SCKNzjkZ2bikbouoXNoSSGouJ0=\",
            \"dev\": true,
            \"requires\": {
                \"better-assert\": \"~1.0.0\"
            }
        },
        \"parseuri\": {
            \"version\": \"0.0.5\",
            \"resolved\": \"https://registry.npmjs.org/parseuri/-/parseuri-0.0.5.tgz\",
            \"integrity\": \"sha1-gCBKUNTbt3m/3G6+J3jZDkvOMgo=\",
            \"dev\": true,
            \"requires\": {
                \"better-assert\": \"~1.0.0\"
            }
        },
        \"parseurl\": {
            \"version\": \"1.3.3\",
            \"resolved\": \"https://registry.npmjs.org/parseurl/-/parseurl-1.3.3.tgz\",
            \"integrity\": \"sha512-CiyeOxFT/JZyN5m0z9PfXw4SCBJ6Sygz1Dpl0wqjlhDEGGBP1GnsUVEL0p63hoG1fcj3fHynXi9NYO4nWOL+qQ==\",
            \"dev\": true
        },
        \"pascalcase\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/pascalcase/-/pascalcase-0.1.1.tgz\",
            \"integrity\": \"sha1-s2PlXoAGym/iF4TS2yK9FdeRfxQ=\",
            \"dev\": true
        },
        \"path-dirname\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/path-dirname/-/path-dirname-1.0.2.tgz\",
            \"integrity\": \"sha1-zDPSTVJeCZpTiMAzbG4yuRYGCeA=\",
            \"dev\": true
        },
        \"path-exists\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-2.1.0.tgz\",
            \"integrity\": \"sha1-D+tsZPD8UY2adU3V77YscCJ2H0s=\",
            \"dev\": true,
            \"requires\": {
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"path-is-absolute\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/path-is-absolute/-/path-is-absolute-1.0.1.tgz\",
            \"integrity\": \"sha1-F0uSaHNVNP+8es5r9TpanhtcX18=\",
            \"dev\": true
        },
        \"path-is-inside\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/path-is-inside/-/path-is-inside-1.0.2.tgz\",
            \"integrity\": \"sha1-NlQX3t5EQw0cEa9hAn+s8HS9/FM=\",
            \"dev\": true
        },
        \"path-parse\": {
            \"version\": \"1.0.6\",
            \"resolved\": \"https://registry.npmjs.org/path-parse/-/path-parse-1.0.6.tgz\",
            \"integrity\": \"sha512-GSmOT2EbHrINBf9SR7CDELwlJ8AENk3Qn7OikK4nFYAu3Ote2+JYNVvkpAEQm3/TLNEJFD/xZJjzyxg3KBWOzw==\",
            \"dev\": true
        },
        \"path-root\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/path-root/-/path-root-0.1.1.tgz\",
            \"integrity\": \"sha1-mkpoFMrBwM1zNgqV8yCDyOpHRbc=\",
            \"dev\": true,
            \"requires\": {
                \"path-root-regex\": \"^0.1.0\"
            }
        },
        \"path-root-regex\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/path-root-regex/-/path-root-regex-0.1.2.tgz\",
            \"integrity\": \"sha1-v8zcjfWxLcUsi0PsONGNcsBLqW0=\",
            \"dev\": true
        },
        \"path-type\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/path-type/-/path-type-1.1.0.tgz\",
            \"integrity\": \"sha1-WcRPfuSR2nBNpBXaWkBwuk+P5EE=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"pify\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"pify\": {
            \"version\": \"2.3.0\",
            \"resolved\": \"https://registry.npmjs.org/pify/-/pify-2.3.0.tgz\",
            \"integrity\": \"sha1-7RQaasBDqEnqWISY59yosVMw6Qw=\",
            \"dev\": true
        },
        \"pinkie\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/pinkie/-/pinkie-2.0.4.tgz\",
            \"integrity\": \"sha1-clVrgM+g1IqXToDnckjoDtT3+HA=\",
            \"dev\": true
        },
        \"pinkie-promise\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/pinkie-promise/-/pinkie-promise-2.0.1.tgz\",
            \"integrity\": \"sha1-ITXW36ejWMBprJsXh3YogihFD/o=\",
            \"dev\": true,
            \"requires\": {
                \"pinkie\": \"^2.0.0\"
            }
        },
        \"portscanner\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/portscanner/-/portscanner-2.1.1.tgz\",
            \"integrity\": \"sha1-6rtAnk3iSVD1oqUW01rnaTQ/u5Y=\",
            \"dev\": true,
            \"requires\": {
                \"async\": \"1.5.2\",
                \"is-number-like\": \"^1.0.3\"
            }
        },
        \"posix-character-classes\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/posix-character-classes/-/posix-character-classes-0.1.1.tgz\",
            \"integrity\": \"sha1-AerA/jta9xoqbAL+q7jB/vfgDqs=\",
            \"dev\": true
        },
        \"pretty-hrtime\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/pretty-hrtime/-/pretty-hrtime-1.0.3.tgz\",
            \"integrity\": \"sha1-t+PqQkNaTJsnWdmeDyAesZWALuE=\",
            \"dev\": true
        },
        \"process-nextick-args\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/process-nextick-args/-/process-nextick-args-2.0.0.tgz\",
            \"integrity\": \"sha512-MtEC1TqN0EU5nephaJ4rAtThHtC86dNN9qCuEhtshvpVBkAW5ZO7BASN9REnF9eoXGcRub+pFuKEpOHE+HbEMw==\",
            \"dev\": true
        },
        \"pump\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/pump/-/pump-2.0.1.tgz\",
            \"integrity\": \"sha512-ruPMNRkN3MHP1cWJc9OWr+T/xDP0jhXYCLfJcBuX54hhfIBnaQmAUMfDcG4DM5UMWByBbJY69QSphm3jtDKIkA==\",
            \"dev\": true,
            \"requires\": {
                \"end-of-stream\": \"^1.1.0\",
                \"once\": \"^1.3.1\"
            }
        },
        \"pumpify\": {
            \"version\": \"1.5.1\",
            \"resolved\": \"https://registry.npmjs.org/pumpify/-/pumpify-1.5.1.tgz\",
            \"integrity\": \"sha512-oClZI37HvuUJJxSKKrC17bZ9Cu0ZYhEAGPsPUy9KlMUmv9dKX2o77RUmq7f3XjIxbwyGwYzbzQ1L2Ks8sIradQ==\",
            \"dev\": true,
            \"requires\": {
                \"duplexify\": \"^3.6.0\",
                \"inherits\": \"^2.0.3\",
                \"pump\": \"^2.0.0\"
            }
        },
        \"qs\": {
            \"version\": \"6.2.3\",
            \"resolved\": \"https://registry.npmjs.org/qs/-/qs-6.2.3.tgz\",
            \"integrity\": \"sha1-HPyyXBCpsrSDBT/zn138kjOQjP4=\",
            \"dev\": true
        },
        \"range-parser\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/range-parser/-/range-parser-1.2.1.tgz\",
            \"integrity\": \"sha512-Hrgsx+orqoygnmhFbKaHE6c296J+HTAQXoxEF6gNupROmmGJRoyzfG3ccAveqCBrwr/2yxQ5BVd/GTl5agOwSg==\",
            \"dev\": true
        },
        \"raw-body\": {
            \"version\": \"2.4.0\",
            \"resolved\": \"https://registry.npmjs.org/raw-body/-/raw-body-2.4.0.tgz\",
            \"integrity\": \"sha512-4Oz8DUIwdvoa5qMJelxipzi/iJIi40O5cGV1wNYp5hvZP8ZN0T+jiNkL0QepXs+EsQ9XJ8ipEDoiH70ySUJP3Q==\",
            \"dev\": true,
            \"requires\": {
                \"bytes\": \"3.1.0\",
                \"http-errors\": \"1.7.2\",
                \"iconv-lite\": \"0.4.24\",
                \"unpipe\": \"1.0.0\"
            }
        },
        \"read-pkg\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/read-pkg/-/read-pkg-1.1.0.tgz\",
            \"integrity\": \"sha1-9f+qXs0pyzHAR0vKfXVra7KePyg=\",
            \"dev\": true,
            \"requires\": {
                \"load-json-file\": \"^1.0.0\",
                \"normalize-package-data\": \"^2.3.2\",
                \"path-type\": \"^1.0.0\"
            }
        },
        \"read-pkg-up\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/read-pkg-up/-/read-pkg-up-1.0.1.tgz\",
            \"integrity\": \"sha1-nWPBMnbAZZGNV/ACpX9AobZD+wI=\",
            \"dev\": true,
            \"requires\": {
                \"find-up\": \"^1.0.0\",
                \"read-pkg\": \"^1.0.0\"
            }
        },
        \"readable-stream\": {
            \"version\": \"2.3.6\",
            \"resolved\": \"https://registry.npmjs.org/readable-stream/-/readable-stream-2.3.6.tgz\",
            \"integrity\": \"sha512-tQtKA9WIAhBF3+VLAseyMqZeBjW0AHJoxOtYqSUZNJxauErmLbVm2FW1y+J/YA9dUrAC39ITejlZWhVIwawkKw==\",
            \"dev\": true,
            \"requires\": {
                \"core-util-is\": \"~1.0.0\",
                \"inherits\": \"~2.0.3\",
                \"isarray\": \"~1.0.0\",
                \"process-nextick-args\": \"~2.0.0\",
                \"safe-buffer\": \"~5.1.1\",
                \"string_decoder\": \"~1.1.1\",
                \"util-deprecate\": \"~1.0.1\"
            },
            \"dependencies\": {
                \"isarray\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-1.0.0.tgz\",
                    \"integrity\": \"sha1-u5NdSFgsuhaMBoNJV6VKPgcSTxE=\",
                    \"dev\": true
                }
            }
        },
        \"readdirp\": {
            \"version\": \"2.2.1\",
            \"resolved\": \"https://registry.npmjs.org/readdirp/-/readdirp-2.2.1.tgz\",
            \"integrity\": \"sha512-1JU/8q+VgFZyxwrJ+SVIOsh+KywWGpds3NTqikiKpDMZWScmAYyKIgqkO+ARvNWJfXeXR1zxz7aHF4u4CyH6vQ==\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.11\",
                \"micromatch\": \"^3.1.10\",
                \"readable-stream\": \"^2.0.2\"
            }
        },
        \"rechoir\": {
            \"version\": \"0.6.2\",
            \"resolved\": \"https://registry.npmjs.org/rechoir/-/rechoir-0.6.2.tgz\",
            \"integrity\": \"sha1-hSBLVNuoLVdC4oyWdW70OvUOM4Q=\",
            \"dev\": true,
            \"requires\": {
                \"resolve\": \"^1.1.6\"
            }
        },
        \"regex-not\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/regex-not/-/regex-not-1.0.2.tgz\",
            \"integrity\": \"sha512-J6SDjUgDxQj5NusnOtdFxDwN/+HWykR8GELwctJ7mdqhcyy1xEc4SRFHUXvxTp661YaVKAjfRLZ9cCqS6tn32A==\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^3.0.2\",
                \"safe-regex\": \"^1.1.0\"
            }
        },
        \"remove-bom-buffer\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/remove-bom-buffer/-/remove-bom-buffer-3.0.0.tgz\",
            \"integrity\": \"sha512-8v2rWhaakv18qcvNeli2mZ/TMTL2nEyAKRvzo1WtnZBl15SHyEhrCu2/xKlJyUFKHiHgfXIyuY6g2dObJJycXQ==\",
            \"dev\": true,
            \"requires\": {
                \"is-buffer\": \"^1.1.5\",
                \"is-utf8\": \"^0.2.1\"
            }
        },
        \"remove-bom-stream\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/remove-bom-stream/-/remove-bom-stream-1.2.0.tgz\",
            \"integrity\": \"sha1-BfGlk/FuQuH7kOv1nejlaVJflSM=\",
            \"dev\": true,
            \"requires\": {
                \"remove-bom-buffer\": \"^3.0.0\",
                \"safe-buffer\": \"^5.1.0\",
                \"through2\": \"^2.0.3\"
            }
        },
        \"remove-trailing-separator\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/remove-trailing-separator/-/remove-trailing-separator-1.1.0.tgz\",
            \"integrity\": \"sha1-wkvOKig62tW8P1jg1IJJuSN52O8=\",
            \"dev\": true
        },
        \"repeat-element\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/repeat-element/-/repeat-element-1.1.3.tgz\",
            \"integrity\": \"sha512-ahGq0ZnV5m5XtZLMb+vP76kcAM5nkLqk0lpqAuojSKGgQtn4eRi4ZZGm2olo2zKFH+sMsWaqOCW1dqAnOru72g==\",
            \"dev\": true
        },
        \"repeat-string\": {
            \"version\": \"1.6.1\",
            \"resolved\": \"https://registry.npmjs.org/repeat-string/-/repeat-string-1.6.1.tgz\",
            \"integrity\": \"sha1-jcrkcOHIirwtYA//Sndihtp15jc=\",
            \"dev\": true
        },
        \"replace-ext\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/replace-ext/-/replace-ext-1.0.0.tgz\",
            \"integrity\": \"sha1-3mMSg3P8v3w8z6TeWkgMRaZ5WOs=\",
            \"dev\": true
        },
        \"replace-homedir\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/replace-homedir/-/replace-homedir-1.0.0.tgz\",
            \"integrity\": \"sha1-6H9tUTuSjd6AgmDBK+f+xv9ueYw=\",
            \"dev\": true,
            \"requires\": {
                \"homedir-polyfill\": \"^1.0.1\",
                \"is-absolute\": \"^1.0.0\",
                \"remove-trailing-separator\": \"^1.1.0\"
            }
        },
        \"require-directory\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/require-directory/-/require-directory-2.1.1.tgz\",
            \"integrity\": \"sha1-jGStX9MNqxyXbiNE/+f3kqam30I=\",
            \"dev\": true
        },
        \"require-main-filename\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/require-main-filename/-/require-main-filename-1.0.1.tgz\",
            \"integrity\": \"sha1-l/cXtp1IeE9fUmpsWqj/3aBVpNE=\",
            \"dev\": true
        },
        \"requires-port\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/requires-port/-/requires-port-1.0.0.tgz\",
            \"integrity\": \"sha1-kl0mAdOaxIXgkc8NpcbmlNw9yv8=\",
            \"dev\": true
        },
        \"resolve\": {
            \"version\": \"1.10.1\",
            \"resolved\": \"https://registry.npmjs.org/resolve/-/resolve-1.10.1.tgz\",
            \"integrity\": \"sha512-KuIe4mf++td/eFb6wkaPbMDnP6kObCaEtIDuHOUED6MNUo4K670KZUHuuvYPZDxNF0WVLw49n06M2m2dXphEzA==\",
            \"dev\": true,
            \"requires\": {
                \"path-parse\": \"^1.0.6\"
            }
        },
        \"resolve-dir\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/resolve-dir/-/resolve-dir-1.0.1.tgz\",
            \"integrity\": \"sha1-eaQGRMNivoLybv/nOcm7U4IEb0M=\",
            \"dev\": true,
            \"requires\": {
                \"expand-tilde\": \"^2.0.0\",
                \"global-modules\": \"^1.0.0\"
            }
        },
        \"resolve-options\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/resolve-options/-/resolve-options-1.1.0.tgz\",
            \"integrity\": \"sha1-MrueOcBtZzONyTeMDW1gdFZq0TE=\",
            \"dev\": true,
            \"requires\": {
                \"value-or-function\": \"^3.0.0\"
            }
        },
        \"resolve-url\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/resolve-url/-/resolve-url-0.2.1.tgz\",
            \"integrity\": \"sha1-LGN/53yJOv0qZj/iGqkIAGjiBSo=\",
            \"dev\": true
        },
        \"resp-modifier\": {
            \"version\": \"6.0.2\",
            \"resolved\": \"https://registry.npmjs.org/resp-modifier/-/resp-modifier-6.0.2.tgz\",
            \"integrity\": \"sha1-sSTeXE+6/LpUH0j/pzlw9KpFa08=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"^2.2.0\",
                \"minimatch\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                }
            }
        },
        \"ret\": {
            \"version\": \"0.1.15\",
            \"resolved\": \"https://registry.npmjs.org/ret/-/ret-0.1.15.tgz\",
            \"integrity\": \"sha512-TTlYpa+OL+vMMNG24xSlQGEJ3B/RzEfUlLct7b5G/ytav+wPrplCpVMFuwzXbkecJrb6IYo1iFb0S9v37754mg==\",
            \"dev\": true
        },
        \"rimraf\": {
            \"version\": \"2.6.3\",
            \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.6.3.tgz\",
            \"integrity\": \"sha512-mwqeW5XsA2qAejG46gYdENaxXjx9onRNCfn7L0duuP4hCuTIi/QO7PDK07KJfp1d+izWPrzEJDcSqBa0OZQriA==\",
            \"dev\": true,
            \"requires\": {
                \"glob\": \"^7.1.3\"
            }
        },
        \"rx\": {
            \"version\": \"4.1.0\",
            \"resolved\": \"https://registry.npmjs.org/rx/-/rx-4.1.0.tgz\",
            \"integrity\": \"sha1-pfE/957zt0D+MKqAP7CfmIBdR4I=\",
            \"dev\": true
        },
        \"rxjs\": {
            \"version\": \"5.5.12\",
            \"resolved\": \"https://registry.npmjs.org/rxjs/-/rxjs-5.5.12.tgz\",
            \"integrity\": \"sha512-xx2itnL5sBbqeeiVgNPVuQQ1nC8Jp2WfNJhXWHmElW9YmrpS9UVnNzhP3EH3HFqexO5Tlp8GhYY+WEcqcVMvGw==\",
            \"dev\": true,
            \"requires\": {
                \"symbol-observable\": \"1.0.1\"
            }
        },
        \"safe-buffer\": {
            \"version\": \"5.1.2\",
            \"resolved\": \"https://registry.npmjs.org/safe-buffer/-/safe-buffer-5.1.2.tgz\",
            \"integrity\": \"sha512-Gd2UZBJDkXlY7GbJxfsE8/nvKkUEU1G38c1siN6QP6a9PT9MmHB8GnpscSmMJSoF8LOIrt8ud/wPtojys4G6+g==\",
            \"dev\": true
        },
        \"safe-regex\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/safe-regex/-/safe-regex-1.1.0.tgz\",
            \"integrity\": \"sha1-QKNmnzsHfR6UPURinhV91IAjvy4=\",
            \"dev\": true,
            \"requires\": {
                \"ret\": \"~0.1.10\"
            }
        },
        \"safer-buffer\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/safer-buffer/-/safer-buffer-2.1.2.tgz\",
            \"integrity\": \"sha512-YZo3K82SD7Riyi0E1EQPojLz7kpepnSQI9IyPbHHg1XXXevb5dJI7tpyN2ADxGcQbHG7vcyRHk0cbwqcQriUtg==\",
            \"dev\": true
        },
        \"semver\": {
            \"version\": \"5.7.0\",
            \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.7.0.tgz\",
            \"integrity\": \"sha512-Ya52jSX2u7QKghxeoFGpLwCtGlt7j0oY9DYb5apt9nPlJ42ID+ulTXESnt/qAQcoSERyZ5sl3LDIOw0nAn/5DA==\",
            \"dev\": true
        },
        \"semver-greatest-satisfied-range\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/semver-greatest-satisfied-range/-/semver-greatest-satisfied-range-1.1.0.tgz\",
            \"integrity\": \"sha1-E+jCZYq5aRywzXEJMkAoDTb3els=\",
            \"dev\": true,
            \"requires\": {
                \"sver-compat\": \"^1.5.0\"
            }
        },
        \"send\": {
            \"version\": \"0.16.2\",
            \"resolved\": \"https://registry.npmjs.org/send/-/send-0.16.2.tgz\",
            \"integrity\": \"sha512-E64YFPUssFHEFBvpbbjr44NCLtI1AohxQ8ZSiJjQLskAdKuriYEP6VyGEsRDH8ScozGpkaX1BGvhanqCwkcEZw==\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"2.6.9\",
                \"depd\": \"~1.1.2\",
                \"destroy\": \"~1.0.4\",
                \"encodeurl\": \"~1.0.2\",
                \"escape-html\": \"~1.0.3\",
                \"etag\": \"~1.8.1\",
                \"fresh\": \"0.5.2\",
                \"http-errors\": \"~1.6.2\",
                \"mime\": \"1.4.1\",
                \"ms\": \"2.0.0\",
                \"on-finished\": \"~2.3.0\",
                \"range-parser\": \"~1.2.0\",
                \"statuses\": \"~1.4.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"http-errors\": {
                    \"version\": \"1.6.3\",
                    \"resolved\": \"https://registry.npmjs.org/http-errors/-/http-errors-1.6.3.tgz\",
                    \"integrity\": \"sha1-i1VoC7S+KDoLW/TqLjhYC+HZMg0=\",
                    \"dev\": true,
                    \"requires\": {
                        \"depd\": \"~1.1.2\",
                        \"inherits\": \"2.0.3\",
                        \"setprototypeof\": \"1.1.0\",
                        \"statuses\": \">= 1.4.0 < 2\"
                    }
                },
                \"setprototypeof\": {
                    \"version\": \"1.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/setprototypeof/-/setprototypeof-1.1.0.tgz\",
                    \"integrity\": \"sha512-BvE/TwpZX4FXExxOxZyRGQQv651MSwmWKZGqvmPcRIjDqWub67kTKuIMx43cZZrS/cBBzwBcNDWoFxt2XEFIpQ==\",
                    \"dev\": true
                },
                \"statuses\": {
                    \"version\": \"1.4.0\",
                    \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.4.0.tgz\",
                    \"integrity\": \"sha512-zhSCtt8v2NDrRlPQpCNtw/heZLtfUDqxBM1udqikb/Hbk52LK4nQSwr10u77iopCW5LsyHpuXS0GnEc48mLeew==\",
                    \"dev\": true
                }
            }
        },
        \"serve-index\": {
            \"version\": \"1.9.1\",
            \"resolved\": \"https://registry.npmjs.org/serve-index/-/serve-index-1.9.1.tgz\",
            \"integrity\": \"sha1-03aNabHn2C5c4FD/9bRTvqEqkjk=\",
            \"dev\": true,
            \"requires\": {
                \"accepts\": \"~1.3.4\",
                \"batch\": \"0.6.1\",
                \"debug\": \"2.6.9\",
                \"escape-html\": \"~1.0.3\",
                \"http-errors\": \"~1.6.2\",
                \"mime-types\": \"~2.1.17\",
                \"parseurl\": \"~1.3.2\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"http-errors\": {
                    \"version\": \"1.6.3\",
                    \"resolved\": \"https://registry.npmjs.org/http-errors/-/http-errors-1.6.3.tgz\",
                    \"integrity\": \"sha1-i1VoC7S+KDoLW/TqLjhYC+HZMg0=\",
                    \"dev\": true,
                    \"requires\": {
                        \"depd\": \"~1.1.2\",
                        \"inherits\": \"2.0.3\",
                        \"setprototypeof\": \"1.1.0\",
                        \"statuses\": \">= 1.4.0 < 2\"
                    }
                },
                \"setprototypeof\": {
                    \"version\": \"1.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/setprototypeof/-/setprototypeof-1.1.0.tgz\",
                    \"integrity\": \"sha512-BvE/TwpZX4FXExxOxZyRGQQv651MSwmWKZGqvmPcRIjDqWub67kTKuIMx43cZZrS/cBBzwBcNDWoFxt2XEFIpQ==\",
                    \"dev\": true
                },
                \"statuses\": {
                    \"version\": \"1.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.5.0.tgz\",
                    \"integrity\": \"sha1-Fhx9rBd2Wf2YEfQ3cfqZOBR4Yow=\",
                    \"dev\": true
                }
            }
        },
        \"serve-static\": {
            \"version\": \"1.13.2\",
            \"resolved\": \"https://registry.npmjs.org/serve-static/-/serve-static-1.13.2.tgz\",
            \"integrity\": \"sha512-p/tdJrO4U387R9oMjb1oj7qSMaMfmOyd4j9hOFoxZe2baQszgHcSWjuya/CiT5kgZZKRudHNOA0pYXOl8rQ5nw==\",
            \"dev\": true,
            \"requires\": {
                \"encodeurl\": \"~1.0.2\",
                \"escape-html\": \"~1.0.3\",
                \"parseurl\": \"~1.3.2\",
                \"send\": \"0.16.2\"
            }
        },
        \"server-destroy\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/server-destroy/-/server-destroy-1.0.1.tgz\",
            \"integrity\": \"sha1-8Tv5KOQrnD55OD5hzDmYtdFObN0=\",
            \"dev\": true
        },
        \"set-blocking\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/set-blocking/-/set-blocking-2.0.0.tgz\",
            \"integrity\": \"sha1-BF+XgtARrppoA93TgrJDkrPYkPc=\",
            \"dev\": true
        },
        \"set-value\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/set-value/-/set-value-2.0.0.tgz\",
            \"integrity\": \"sha512-hw0yxk9GT/Hr5yJEYnHNKYXkIA8mVJgd9ditYZCe16ZczcaELYYcfvaXesNACk2O8O0nTiPQcQhGUQj8JLzeeg==\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^2.0.1\",
                \"is-extendable\": \"^0.1.1\",
                \"is-plain-object\": \"^2.0.3\",
                \"split-string\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"setprototypeof\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/setprototypeof/-/setprototypeof-1.1.1.tgz\",
            \"integrity\": \"sha512-JvdAWfbXeIGaZ9cILp38HntZSFSo3mWg6xGcJJsd+d4aRMOqauag1C63dJfDw7OaMYwEbHMOxEZ1lqVRYP2OAw==\",
            \"dev\": true
        },
        \"snapdragon\": {
            \"version\": \"0.8.2\",
            \"resolved\": \"https://registry.npmjs.org/snapdragon/-/snapdragon-0.8.2.tgz\",
            \"integrity\": \"sha512-FtyOnWN/wCHTVXOMwvSv26d+ko5vWlIDD6zoUJ7LW8vh+ZBC8QdljveRP+crNrtBwioEUWy/4dMtbBjA4ioNlg==\",
            \"dev\": true,
            \"requires\": {
                \"base\": \"^0.11.1\",
                \"debug\": \"^2.2.0\",
                \"define-property\": \"^0.2.5\",
                \"extend-shallow\": \"^2.0.1\",
                \"map-cache\": \"^0.2.2\",
                \"source-map\": \"^0.5.6\",
                \"source-map-resolve\": \"^0.5.0\",
                \"use\": \"^3.1.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                },
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"snapdragon-node\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/snapdragon-node/-/snapdragon-node-2.1.1.tgz\",
            \"integrity\": \"sha512-O27l4xaMYt/RSQ5TR3vpWCAB5Kb/czIcqUFOM/C4fYcLnbZUc1PkjTAMjof2pBWaSTwOUd6qUHcFGVGj7aIwnw==\",
            \"dev\": true,
            \"requires\": {
                \"define-property\": \"^1.0.0\",
                \"isobject\": \"^3.0.0\",
                \"snapdragon-util\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
                    \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^1.0.0\"
                    }
                },
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"snapdragon-util\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/snapdragon-util/-/snapdragon-util-3.0.1.tgz\",
            \"integrity\": \"sha512-mbKkMdQKsjX4BAL4bRYTj21edOf8cN7XHdYUJEe+Zn99hVEYcMvKPct1IqNe7+AZPirn8BCDOQBHQZknqmKlZQ==\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.2.0\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"socket.io\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/socket.io/-/socket.io-2.1.1.tgz\",
            \"integrity\": \"sha512-rORqq9c+7W0DAK3cleWNSyfv/qKXV99hV4tZe+gGLfBECw3XEhBy7x85F3wypA9688LKjtwO9pX9L33/xQI8yA==\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"~3.1.0\",
                \"engine.io\": \"~3.2.0\",
                \"has-binary2\": \"~1.0.2\",
                \"socket.io-adapter\": \"~1.1.0\",
                \"socket.io-client\": \"2.1.1\",
                \"socket.io-parser\": \"~3.2.0\"
            },
            \"dependencies\": {
                \"engine.io-client\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/engine.io-client/-/engine.io-client-3.2.1.tgz\",
                    \"integrity\": \"sha512-y5AbkytWeM4jQr7m/koQLc5AxpRKC1hEVUb/s1FUAWEJq5AzJJ4NLvzuKPuxtDi5Mq755WuDvZ6Iv2rXj4PTzw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"component-emitter\": \"1.2.1\",
                        \"component-inherit\": \"0.0.3\",
                        \"debug\": \"~3.1.0\",
                        \"engine.io-parser\": \"~2.1.1\",
                        \"has-cors\": \"1.1.0\",
                        \"indexof\": \"0.0.1\",
                        \"parseqs\": \"0.0.5\",
                        \"parseuri\": \"0.0.5\",
                        \"ws\": \"~3.3.1\",
                        \"xmlhttprequest-ssl\": \"~1.5.4\",
                        \"yeast\": \"0.1.2\"
                    }
                },
                \"socket.io-client\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/socket.io-client/-/socket.io-client-2.1.1.tgz\",
                    \"integrity\": \"sha512-jxnFyhAuFxYfjqIgduQlhzqTcOEQSn+OHKVfAxWaNWa7ecP7xSNk2Dx/3UEsDcY7NcFafxvNvKPmmO7HTwTxGQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"backo2\": \"1.0.2\",
                        \"base64-arraybuffer\": \"0.1.5\",
                        \"component-bind\": \"1.0.0\",
                        \"component-emitter\": \"1.2.1\",
                        \"debug\": \"~3.1.0\",
                        \"engine.io-client\": \"~3.2.0\",
                        \"has-binary2\": \"~1.0.2\",
                        \"has-cors\": \"1.1.0\",
                        \"indexof\": \"0.0.1\",
                        \"object-component\": \"0.0.3\",
                        \"parseqs\": \"0.0.5\",
                        \"parseuri\": \"0.0.5\",
                        \"socket.io-parser\": \"~3.2.0\",
                        \"to-array\": \"0.1.4\"
                    }
                },
                \"socket.io-parser\": {
                    \"version\": \"3.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/socket.io-parser/-/socket.io-parser-3.2.0.tgz\",
                    \"integrity\": \"sha512-FYiBx7rc/KORMJlgsXysflWx/RIvtqZbyGLlHZvjfmPTPeuD/I8MaW7cfFrj5tRltICJdgwflhfZ3NVVbVLFQA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"component-emitter\": \"1.2.1\",
                        \"debug\": \"~3.1.0\",
                        \"isarray\": \"2.0.1\"
                    }
                },
                \"ws\": {
                    \"version\": \"3.3.3\",
                    \"resolved\": \"https://registry.npmjs.org/ws/-/ws-3.3.3.tgz\",
                    \"integrity\": \"sha512-nnWLa/NwZSt4KQJu51MYlCcSQ5g7INpOrOMt4XV8j4dqTXdmlUmSHQ8/oLC069ckre0fRsgfvsKwbTdtKLCDkA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"async-limiter\": \"~1.0.0\",
                        \"safe-buffer\": \"~5.1.0\",
                        \"ultron\": \"~1.1.0\"
                    }
                }
            }
        },
        \"socket.io-adapter\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/socket.io-adapter/-/socket.io-adapter-1.1.1.tgz\",
            \"integrity\": \"sha1-KoBeihTWNyEk3ZFZrUUC+MsH8Gs=\",
            \"dev\": true
        },
        \"socket.io-client\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/socket.io-client/-/socket.io-client-2.2.0.tgz\",
            \"integrity\": \"sha512-56ZrkTDbdTLmBIyfFYesgOxsjcLnwAKoN4CiPyTVkMQj3zTUh0QAx3GbvIvLpFEOvQWu92yyWICxB0u7wkVbYA==\",
            \"dev\": true,
            \"requires\": {
                \"backo2\": \"1.0.2\",
                \"base64-arraybuffer\": \"0.1.5\",
                \"component-bind\": \"1.0.0\",
                \"component-emitter\": \"1.2.1\",
                \"debug\": \"~3.1.0\",
                \"engine.io-client\": \"~3.3.1\",
                \"has-binary2\": \"~1.0.2\",
                \"has-cors\": \"1.1.0\",
                \"indexof\": \"0.0.1\",
                \"object-component\": \"0.0.3\",
                \"parseqs\": \"0.0.5\",
                \"parseuri\": \"0.0.5\",
                \"socket.io-parser\": \"~3.3.0\",
                \"to-array\": \"0.1.4\"
            }
        },
        \"socket.io-parser\": {
            \"version\": \"3.3.0\",
            \"resolved\": \"https://registry.npmjs.org/socket.io-parser/-/socket.io-parser-3.3.0.tgz\",
            \"integrity\": \"sha512-hczmV6bDgdaEbVqhAeVMM/jfUfzuEZHsQg6eOmLgJht6G3mPKMxYm75w2+qhAQZ+4X+1+ATZ+QFKeOZD5riHng==\",
            \"dev\": true,
            \"requires\": {
                \"component-emitter\": \"1.2.1\",
                \"debug\": \"~3.1.0\",
                \"isarray\": \"2.0.1\"
            }
        },
        \"source-map\": {
            \"version\": \"0.5.7\",
            \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.5.7.tgz\",
            \"integrity\": \"sha1-igOdLRAh0i0eoUyA2OpGi6LvP8w=\",
            \"dev\": true
        },
        \"source-map-resolve\": {
            \"version\": \"0.5.2\",
            \"resolved\": \"https://registry.npmjs.org/source-map-resolve/-/source-map-resolve-0.5.2.tgz\",
            \"integrity\": \"sha512-MjqsvNwyz1s0k81Goz/9vRBe9SZdB09Bdw+/zYyO+3CuPk6fouTaxscHkgtE8jKvf01kVfl8riHzERQ/kefaSA==\",
            \"dev\": true,
            \"requires\": {
                \"atob\": \"^2.1.1\",
                \"decode-uri-component\": \"^0.2.0\",
                \"resolve-url\": \"^0.2.1\",
                \"source-map-url\": \"^0.4.0\",
                \"urix\": \"^0.1.0\"
            }
        },
        \"source-map-url\": {
            \"version\": \"0.4.0\",
            \"resolved\": \"https://registry.npmjs.org/source-map-url/-/source-map-url-0.4.0.tgz\",
            \"integrity\": \"sha1-PpNdfd1zYxuXZZlW1VEo6HtQhKM=\",
            \"dev\": true
        },
        \"sparkles\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/sparkles/-/sparkles-1.0.1.tgz\",
            \"integrity\": \"sha512-dSO0DDYUahUt/0/pD/Is3VIm5TGJjludZ0HVymmhYF6eNA53PVLhnUk0znSYbH8IYBuJdCE+1luR22jNLMaQdw==\",
            \"dev\": true
        },
        \"spdx-correct\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/spdx-correct/-/spdx-correct-3.1.0.tgz\",
            \"integrity\": \"sha512-lr2EZCctC2BNR7j7WzJ2FpDznxky1sjfxvvYEyzxNyb6lZXHODmEoJeFu4JupYlkfha1KZpJyoqiJ7pgA1qq8Q==\",
            \"dev\": true,
            \"requires\": {
                \"spdx-expression-parse\": \"^3.0.0\",
                \"spdx-license-ids\": \"^3.0.0\"
            }
        },
        \"spdx-exceptions\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/spdx-exceptions/-/spdx-exceptions-2.2.0.tgz\",
            \"integrity\": \"sha512-2XQACfElKi9SlVb1CYadKDXvoajPgBVPn/gOQLrTvHdElaVhr7ZEbqJaRnJLVNeaI4cMEAgVCeBMKF6MWRDCRA==\",
            \"dev\": true
        },
        \"spdx-expression-parse\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/spdx-expression-parse/-/spdx-expression-parse-3.0.0.tgz\",
            \"integrity\": \"sha512-Yg6D3XpRD4kkOmTpdgbUiEJFKghJH03fiC1OPll5h/0sO6neh2jqRDVHOQ4o/LMea0tgCkbMgea5ip/e+MkWyg==\",
            \"dev\": true,
            \"requires\": {
                \"spdx-exceptions\": \"^2.1.0\",
                \"spdx-license-ids\": \"^3.0.0\"
            }
        },
        \"spdx-license-ids\": {
            \"version\": \"3.0.4\",
            \"resolved\": \"https://registry.npmjs.org/spdx-license-ids/-/spdx-license-ids-3.0.4.tgz\",
            \"integrity\": \"sha512-7j8LYJLeY/Yb6ACbQ7F76qy5jHkp0U6jgBfJsk97bwWlVUnUWsAgpyaCvo17h0/RQGnQ036tVDomiwoI4pDkQA==\",
            \"dev\": true
        },
        \"split-string\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/split-string/-/split-string-3.1.0.tgz\",
            \"integrity\": \"sha512-NzNVhJDYpwceVVii8/Hu6DKfD2G+NrQHlS/V/qgv763EYudVwEcMQNxd2lh+0VrUByXN/oJkl5grOhYWvQUYiw==\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^3.0.0\"
            }
        },
        \"stack-trace\": {
            \"version\": \"0.0.10\",
            \"resolved\": \"https://registry.npmjs.org/stack-trace/-/stack-trace-0.0.10.tgz\",
            \"integrity\": \"sha1-VHxws0fo0ytOEI6hoqFZ5f3eGcA=\",
            \"dev\": true
        },
        \"static-extend\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/static-extend/-/static-extend-0.1.2.tgz\",
            \"integrity\": \"sha1-YICcOcv/VTNyJv1eC1IPNB8ftcY=\",
            \"dev\": true,
            \"requires\": {
                \"define-property\": \"^0.2.5\",
                \"object-copy\": \"^0.1.0\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                }
            }
        },
        \"statuses\": {
            \"version\": \"1.3.1\",
            \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.3.1.tgz\",
            \"integrity\": \"sha1-+vUbnrdKrvOzrPStX2Gr8ky3uT4=\",
            \"dev\": true
        },
        \"stream-exhaust\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/stream-exhaust/-/stream-exhaust-1.0.2.tgz\",
            \"integrity\": \"sha512-b/qaq/GlBK5xaq1yrK9/zFcyRSTNxmcZwFLGSTG0mXgZl/4Z6GgiyYOXOvY7N3eEvFRAG1bkDRz5EPGSvPYQlw==\",
            \"dev\": true
        },
        \"stream-shift\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/stream-shift/-/stream-shift-1.0.0.tgz\",
            \"integrity\": \"sha1-1cdSgl5TZ+eG944Y5EXqIjoVWVI=\",
            \"dev\": true
        },
        \"stream-throttle\": {
            \"version\": \"0.1.3\",
            \"resolved\": \"https://registry.npmjs.org/stream-throttle/-/stream-throttle-0.1.3.tgz\",
            \"integrity\": \"sha1-rdV8jXzHOoFjDTHNVdOWHPr7qcM=\",
            \"dev\": true,
            \"requires\": {
                \"commander\": \"^2.2.0\",
                \"limiter\": \"^1.0.5\"
            }
        },
        \"string-width\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-1.0.2.tgz\",
            \"integrity\": \"sha1-EYvfW4zcUaKn5w0hHgfisLmxB9M=\",
            \"dev\": true,
            \"requires\": {
                \"code-point-at\": \"^1.0.0\",
                \"is-fullwidth-code-point\": \"^1.0.0\",
                \"strip-ansi\": \"^3.0.0\"
            }
        },
        \"string_decoder\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/string_decoder/-/string_decoder-1.1.1.tgz\",
            \"integrity\": \"sha512-n/ShnvDi6FHbbVfviro+WojiFzv+s8MPMHBczVePfUpDJLwoLT0ht1l4YwBCbi8pJAveEEdnkHyPyTP/mzRfwg==\",
            \"dev\": true,
            \"requires\": {
                \"safe-buffer\": \"~5.1.0\"
            }
        },
        \"strip-ansi\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-3.0.1.tgz\",
            \"integrity\": \"sha1-ajhfuIU9lS1f8F0Oiq+UJ43GPc8=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-regex\": \"^2.0.0\"
            }
        },
        \"strip-bom\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/strip-bom/-/strip-bom-2.0.0.tgz\",
            \"integrity\": \"sha1-YhmoVhZSBJHzV4i9vxRHqZx+aw4=\",
            \"dev\": true,
            \"requires\": {
                \"is-utf8\": \"^0.2.0\"
            }
        },
        \"supports-color\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-2.0.0.tgz\",
            \"integrity\": \"sha1-U10EXOa2Nj+kARcIRimZXp3zJMc=\",
            \"dev\": true
        },
        \"sver-compat\": {
            \"version\": \"1.5.0\",
            \"resolved\": \"https://registry.npmjs.org/sver-compat/-/sver-compat-1.5.0.tgz\",
            \"integrity\": \"sha1-PPh9/rTQe0o/FIJ7wYaz/QxkXNg=\",
            \"dev\": true,
            \"requires\": {
                \"es6-iterator\": \"^2.0.1\",
                \"es6-symbol\": \"^3.1.1\"
            }
        },
        \"symbol-observable\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/symbol-observable/-/symbol-observable-1.0.1.tgz\",
            \"integrity\": \"sha1-g0D8RwLDEi310iKI+IKD9RPT/dQ=\",
            \"dev\": true
        },
        \"tfunk\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/tfunk/-/tfunk-3.1.0.tgz\",
            \"integrity\": \"sha1-OORBT8ZJd9h6/apy+sttKfgve1s=\",
            \"dev\": true,
            \"requires\": {
                \"chalk\": \"^1.1.1\",
                \"object-path\": \"^0.9.0\"
            }
        },
        \"through2\": {
            \"version\": \"2.0.5\",
            \"resolved\": \"https://registry.npmjs.org/through2/-/through2-2.0.5.tgz\",
            \"integrity\": \"sha512-/mrRod8xqpA+IHSLyGCQ2s8SPHiCDEeQJSep1jqLYeEUClOFG2Qsh+4FU6G9VeqpZnGW/Su8LQGc4YKni5rYSQ==\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"~2.3.6\",
                \"xtend\": \"~4.0.1\"
            }
        },
        \"through2-filter\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/through2-filter/-/through2-filter-3.0.0.tgz\",
            \"integrity\": \"sha512-jaRjI2WxN3W1V8/FMZ9HKIBXixtiqs3SQSX4/YGIiP3gL6djW48VoZq9tDqeCWs3MT8YY5wb/zli8VW8snY1CA==\",
            \"dev\": true,
            \"requires\": {
                \"through2\": \"~2.0.0\",
                \"xtend\": \"~4.0.0\"
            }
        },
        \"time-stamp\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/time-stamp/-/time-stamp-1.1.0.tgz\",
            \"integrity\": \"sha1-dkpaEa9QVhkhsTPztE5hhofg9cM=\",
            \"dev\": true
        },
        \"to-absolute-glob\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/to-absolute-glob/-/to-absolute-glob-2.0.2.tgz\",
            \"integrity\": \"sha1-GGX0PZ50sIItufFFt4z/fQ98hJs=\",
            \"dev\": true,
            \"requires\": {
                \"is-absolute\": \"^1.0.0\",
                \"is-negated-glob\": \"^1.0.0\"
            }
        },
        \"to-array\": {
            \"version\": \"0.1.4\",
            \"resolved\": \"https://registry.npmjs.org/to-array/-/to-array-0.1.4.tgz\",
            \"integrity\": \"sha1-F+bBH3PdTz10zaek/zI46a2b+JA=\",
            \"dev\": true
        },
        \"to-object-path\": {
            \"version\": \"0.3.0\",
            \"resolved\": \"https://registry.npmjs.org/to-object-path/-/to-object-path-0.3.0.tgz\",
            \"integrity\": \"sha1-KXWIt7Dn4KwI4E5nL4XB9JmeF68=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"to-regex\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/to-regex/-/to-regex-3.0.2.tgz\",
            \"integrity\": \"sha512-FWtleNAtZ/Ki2qtqej2CXTOayOH9bHDQF+Q48VpWyDXjbYxA4Yz8iDB31zXOBUlOHHKidDbqGVrTUvQMPmBGBw==\",
            \"dev\": true,
            \"requires\": {
                \"define-property\": \"^2.0.2\",
                \"extend-shallow\": \"^3.0.2\",
                \"regex-not\": \"^1.0.2\",
                \"safe-regex\": \"^1.1.0\"
            }
        },
        \"to-regex-range\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-2.1.1.tgz\",
            \"integrity\": \"sha1-fIDBe53+vlmeJzZ+DU3VWQFB2zg=\",
            \"dev\": true,
            \"requires\": {
                \"is-number\": \"^3.0.0\",
                \"repeat-string\": \"^1.6.1\"
            }
        },
        \"to-through\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/to-through/-/to-through-2.0.0.tgz\",
            \"integrity\": \"sha1-/JKtq6ByZHvAtn1rA2ZKoZUJOvY=\",
            \"dev\": true,
            \"requires\": {
                \"through2\": \"^2.0.3\"
            }
        },
        \"toidentifier\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/toidentifier/-/toidentifier-1.0.0.tgz\",
            \"integrity\": \"sha512-yaOH/Pk/VEhBWWTlhI+qXxDFXlejDGcQipMlyxda9nthulaxLZUNcUqFxokp0vcYnvteJln5FNQDRrxj3YcbVw==\",
            \"dev\": true
        },
        \"typedarray\": {
            \"version\": \"0.0.6\",
            \"resolved\": \"https://registry.npmjs.org/typedarray/-/typedarray-0.0.6.tgz\",
            \"integrity\": \"sha1-hnrHTjhkGHsdPUfZlqeOxciDB3c=\",
            \"dev\": true
        },
        \"ua-parser-js\": {
            \"version\": \"0.7.17\",
            \"resolved\": \"https://registry.npmjs.org/ua-parser-js/-/ua-parser-js-0.7.17.tgz\",
            \"integrity\": \"sha512-uRdSdu1oA1rncCQL7sCj8vSyZkgtL7faaw9Tc9rZ3mGgraQ7+Pdx7w5mnOSF3gw9ZNG6oc+KXfkon3bKuROm0g==\",
            \"dev\": true
        },
        \"ultron\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ultron/-/ultron-1.1.1.tgz\",
            \"integrity\": \"sha512-UIEXBNeYmKptWH6z8ZnqTeS8fV74zG0/eRU9VGkpzz+LIJNs8W/zM/L+7ctCkRrgbNnnR0xxw4bKOr0cW0N0Og==\",
            \"dev\": true
        },
        \"unc-path-regex\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/unc-path-regex/-/unc-path-regex-0.1.2.tgz\",
            \"integrity\": \"sha1-5z3T17DXxe2G+6xrCufYxqadUPo=\",
            \"dev\": true
        },
        \"undertaker\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/undertaker/-/undertaker-1.2.1.tgz\",
            \"integrity\": \"sha512-71WxIzDkgYk9ZS+spIB8iZXchFhAdEo2YU8xYqBYJ39DIUIqziK78ftm26eecoIY49X0J2MLhG4hr18Yp6/CMA==\",
            \"dev\": true,
            \"requires\": {
                \"arr-flatten\": \"^1.0.1\",
                \"arr-map\": \"^2.0.0\",
                \"bach\": \"^1.0.0\",
                \"collection-map\": \"^1.0.0\",
                \"es6-weak-map\": \"^2.0.1\",
                \"last-run\": \"^1.1.0\",
                \"object.defaults\": \"^1.0.0\",
                \"object.reduce\": \"^1.0.0\",
                \"undertaker-registry\": \"^1.0.0\"
            }
        },
        \"undertaker-registry\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/undertaker-registry/-/undertaker-registry-1.0.1.tgz\",
            \"integrity\": \"sha1-XkvaMI5KiirlhPm5pDWaSZglzFA=\",
            \"dev\": true
        },
        \"union-value\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/union-value/-/union-value-1.0.0.tgz\",
            \"integrity\": \"sha1-XHHDTLW61dzr4+oM0IIHulqhrqQ=\",
            \"dev\": true,
            \"requires\": {
                \"arr-union\": \"^3.1.0\",
                \"get-value\": \"^2.0.6\",
                \"is-extendable\": \"^0.1.1\",
                \"set-value\": \"^0.4.3\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                },
                \"set-value\": {
                    \"version\": \"0.4.3\",
                    \"resolved\": \"https://registry.npmjs.org/set-value/-/set-value-0.4.3.tgz\",
                    \"integrity\": \"sha1-fbCPnT0i3H945Trzw79GZuzfzPE=\",
                    \"dev\": true,
                    \"requires\": {
                        \"extend-shallow\": \"^2.0.1\",
                        \"is-extendable\": \"^0.1.1\",
                        \"is-plain-object\": \"^2.0.1\",
                        \"to-object-path\": \"^0.3.0\"
                    }
                }
            }
        },
        \"unique-stream\": {
            \"version\": \"2.3.1\",
            \"resolved\": \"https://registry.npmjs.org/unique-stream/-/unique-stream-2.3.1.tgz\",
            \"integrity\": \"sha512-2nY4TnBE70yoxHkDli7DMazpWiP7xMdCYqU2nBRO0UB+ZpEkGsSija7MvmvnZFUeC+mrgiUfcHSr3LmRFIg4+A==\",
            \"dev\": true,
            \"requires\": {
                \"json-stable-stringify-without-jsonify\": \"^1.0.1\",
                \"through2-filter\": \"^3.0.0\"
            }
        },
        \"universalify\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/universalify/-/universalify-0.1.2.tgz\",
            \"integrity\": \"sha512-rBJeI5CXAlmy1pV+617WB9J63U6XcazHHF2f2dbJix4XzpUF0RS3Zbj0FGIOCAva5P/d/GBOYaACQ1w+0azUkg==\",
            \"dev\": true
        },
        \"unpipe\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/unpipe/-/unpipe-1.0.0.tgz\",
            \"integrity\": \"sha1-sr9O6FFKrmFltIF4KdIbLvSZBOw=\",
            \"dev\": true
        },
        \"unset-value\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/unset-value/-/unset-value-1.0.0.tgz\",
            \"integrity\": \"sha1-g3aHP30jNRef+x5vw6jtDfyKtVk=\",
            \"dev\": true,
            \"requires\": {
                \"has-value\": \"^0.3.1\",
                \"isobject\": \"^3.0.0\"
            },
            \"dependencies\": {
                \"has-value\": {
                    \"version\": \"0.3.1\",
                    \"resolved\": \"https://registry.npmjs.org/has-value/-/has-value-0.3.1.tgz\",
                    \"integrity\": \"sha1-ex9YutpiyoJ+wKIHgCVlSEWZXh8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"get-value\": \"^2.0.3\",
                        \"has-values\": \"^0.1.4\",
                        \"isobject\": \"^2.0.0\"
                    },
                    \"dependencies\": {
                        \"isobject\": {
                            \"version\": \"2.1.0\",
                            \"resolved\": \"https://registry.npmjs.org/isobject/-/isobject-2.1.0.tgz\",
                            \"integrity\": \"sha1-8GVWEJaj8dou9GJy+BXIQNh+DIk=\",
                            \"dev\": true,
                            \"requires\": {
                                \"isarray\": \"1.0.0\"
                            }
                        }
                    }
                },
                \"has-values\": {
                    \"version\": \"0.1.4\",
                    \"resolved\": \"https://registry.npmjs.org/has-values/-/has-values-0.1.4.tgz\",
                    \"integrity\": \"sha1-bWHeldkd/Km5oCCJrThL/49it3E=\",
                    \"dev\": true
                },
                \"isarray\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-1.0.0.tgz\",
                    \"integrity\": \"sha1-u5NdSFgsuhaMBoNJV6VKPgcSTxE=\",
                    \"dev\": true
                }
            }
        },
        \"upath\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/upath/-/upath-1.1.2.tgz\",
            \"integrity\": \"sha512-kXpym8nmDmlCBr7nKdIx8P2jNBa+pBpIUFRnKJ4dr8htyYGJFokkr2ZvERRtUN+9SY+JqXouNgUPtv6JQva/2Q==\",
            \"dev\": true
        },
        \"urix\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/urix/-/urix-0.1.0.tgz\",
            \"integrity\": \"sha1-2pN/emLiH+wf0Y1Js1wpNQZ6bHI=\",
            \"dev\": true
        },
        \"use\": {
            \"version\": \"3.1.1\",
            \"resolved\": \"https://registry.npmjs.org/use/-/use-3.1.1.tgz\",
            \"integrity\": \"sha512-cwESVXlO3url9YWlFW/TA9cshCEhtu7IKJ/p5soJ/gGpj7vbvFrAY/eIioQ6Dw23KjZhYgiIo8HOs1nQ2vr/oQ==\",
            \"dev\": true
        },
        \"util-deprecate\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/util-deprecate/-/util-deprecate-1.0.2.tgz\",
            \"integrity\": \"sha1-RQ1Nyfpw3nMnYvvS1KKJgUGaDM8=\",
            \"dev\": true
        },
        \"utils-merge\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/utils-merge/-/utils-merge-1.0.1.tgz\",
            \"integrity\": \"sha1-n5VxD1CiZ5R7LMwSR0HBAoQn5xM=\",
            \"dev\": true
        },
        \"v8flags\": {
            \"version\": \"3.1.2\",
            \"resolved\": \"https://registry.npmjs.org/v8flags/-/v8flags-3.1.2.tgz\",
            \"integrity\": \"sha512-MtivA7GF24yMPte9Rp/BWGCYQNaUj86zeYxV/x2RRJMKagImbbv3u8iJC57lNhWLPcGLJmHcHmFWkNsplbbLWw==\",
            \"dev\": true,
            \"requires\": {
                \"homedir-polyfill\": \"^1.0.1\"
            }
        },
        \"validate-npm-package-license\": {
            \"version\": \"3.0.4\",
            \"resolved\": \"https://registry.npmjs.org/validate-npm-package-license/-/validate-npm-package-license-3.0.4.tgz\",
            \"integrity\": \"sha512-DpKm2Ui/xN7/HQKCtpZxoRWBhZ9Z0kqtygG8XCgNQ8ZlDnxuQmWhj566j8fN4Cu3/JmbhsDo7fcAJq4s9h27Ew==\",
            \"dev\": true,
            \"requires\": {
                \"spdx-correct\": \"^3.0.0\",
                \"spdx-expression-parse\": \"^3.0.0\"
            }
        },
        \"value-or-function\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/value-or-function/-/value-or-function-3.0.0.tgz\",
            \"integrity\": \"sha1-HCQ6ULWVwb5Up1S/7OhWO5/42BM=\",
            \"dev\": true
        },
        \"vinyl\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/vinyl/-/vinyl-2.2.0.tgz\",
            \"integrity\": \"sha512-MBH+yP0kC/GQ5GwBqrTPTzEfiiLjta7hTtvQtbxBgTeSXsmKQRQecjibMbxIXzVT3Y9KJK+drOz1/k+vsu8Nkg==\",
            \"dev\": true,
            \"requires\": {
                \"clone\": \"^2.1.1\",
                \"clone-buffer\": \"^1.0.0\",
                \"clone-stats\": \"^1.0.0\",
                \"cloneable-readable\": \"^1.0.0\",
                \"remove-trailing-separator\": \"^1.0.1\",
                \"replace-ext\": \"^1.0.0\"
            }
        },
        \"vinyl-fs\": {
            \"version\": \"3.0.3\",
            \"resolved\": \"https://registry.npmjs.org/vinyl-fs/-/vinyl-fs-3.0.3.tgz\",
            \"integrity\": \"sha512-vIu34EkyNyJxmP0jscNzWBSygh7VWhqun6RmqVfXePrOwi9lhvRs//dOaGOTRUQr4tx7/zd26Tk5WeSVZitgng==\",
            \"dev\": true,
            \"requires\": {
                \"fs-mkdirp-stream\": \"^1.0.0\",
                \"glob-stream\": \"^6.1.0\",
                \"graceful-fs\": \"^4.0.0\",
                \"is-valid-glob\": \"^1.0.0\",
                \"lazystream\": \"^1.0.0\",
                \"lead\": \"^1.0.0\",
                \"object.assign\": \"^4.0.4\",
                \"pumpify\": \"^1.3.5\",
                \"readable-stream\": \"^2.3.3\",
                \"remove-bom-buffer\": \"^3.0.0\",
                \"remove-bom-stream\": \"^1.2.0\",
                \"resolve-options\": \"^1.1.0\",
                \"through2\": \"^2.0.0\",
                \"to-through\": \"^2.0.0\",
                \"value-or-function\": \"^3.0.0\",
                \"vinyl\": \"^2.0.0\",
                \"vinyl-sourcemap\": \"^1.1.0\"
            }
        },
        \"vinyl-sourcemap\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/vinyl-sourcemap/-/vinyl-sourcemap-1.1.0.tgz\",
            \"integrity\": \"sha1-kqgAWTo4cDqM2xHYswCtS+Y7PhY=\",
            \"dev\": true,
            \"requires\": {
                \"append-buffer\": \"^1.0.2\",
                \"convert-source-map\": \"^1.5.0\",
                \"graceful-fs\": \"^4.1.6\",
                \"normalize-path\": \"^2.1.1\",
                \"now-and-later\": \"^2.0.0\",
                \"remove-bom-buffer\": \"^3.0.0\",
                \"vinyl\": \"^2.0.0\"
            },
            \"dependencies\": {
                \"normalize-path\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-2.1.1.tgz\",
                    \"integrity\": \"sha1-GrKLVW4Zg2Oowab35vogE3/mrtk=\",
                    \"dev\": true,
                    \"requires\": {
                        \"remove-trailing-separator\": \"^1.0.1\"
                    }
                }
            }
        },
        \"which\": {
            \"version\": \"1.3.1\",
            \"resolved\": \"https://registry.npmjs.org/which/-/which-1.3.1.tgz\",
            \"integrity\": \"sha512-HxJdYWq1MTIQbJ3nw0cqssHoTNU267KlrDuGZ1WYlxDStUtKUhOaJmh112/TZmHxxUfuJqPXSOm7tDyas0OSIQ==\",
            \"dev\": true,
            \"requires\": {
                \"isexe\": \"^2.0.0\"
            }
        },
        \"which-module\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/which-module/-/which-module-1.0.0.tgz\",
            \"integrity\": \"sha1-u6Y8qGGUiZT/MHc2CJ47lgJsKk8=\",
            \"dev\": true
        },
        \"window-size\": {
            \"version\": \"0.2.0\",
            \"resolved\": \"https://registry.npmjs.org/window-size/-/window-size-0.2.0.tgz\",
            \"integrity\": \"sha1-tDFbtCFKPXBY6+7okuE/ok2YsHU=\",
            \"dev\": true
        },
        \"wrap-ansi\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-2.1.0.tgz\",
            \"integrity\": \"sha1-2Pw9KE3QV5T+hJc8rs3Rz4JP3YU=\",
            \"dev\": true,
            \"requires\": {
                \"string-width\": \"^1.0.1\",
                \"strip-ansi\": \"^3.0.1\"
            }
        },
        \"wrappy\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/wrappy/-/wrappy-1.0.2.tgz\",
            \"integrity\": \"sha1-tSQ9jz7BqjXxNkYFvA0QNuMKtp8=\",
            \"dev\": true
        },
        \"ws\": {
            \"version\": \"6.1.4\",
            \"resolved\": \"https://registry.npmjs.org/ws/-/ws-6.1.4.tgz\",
            \"integrity\": \"sha512-eqZfL+NE/YQc1/ZynhojeV8q+H050oR8AZ2uIev7RU10svA9ZnJUddHcOUZTJLinZ9yEfdA2kSATS2qZK5fhJA==\",
            \"dev\": true,
            \"requires\": {
                \"async-limiter\": \"~1.0.0\"
            }
        },
        \"xmlhttprequest-ssl\": {
            \"version\": \"1.5.5\",
            \"resolved\": \"https://registry.npmjs.org/xmlhttprequest-ssl/-/xmlhttprequest-ssl-1.5.5.tgz\",
            \"integrity\": \"sha1-wodrBhaKrcQOV9l+gRkayPQ5iz4=\",
            \"dev\": true
        },
        \"xtend\": {
            \"version\": \"4.0.1\",
            \"resolved\": \"https://registry.npmjs.org/xtend/-/xtend-4.0.1.tgz\",
            \"integrity\": \"sha1-pcbVMr5lbiPbgg77lDofBJmNY68=\",
            \"dev\": true
        },
        \"y18n\": {
            \"version\": \"3.2.1\",
            \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-3.2.1.tgz\",
            \"integrity\": \"sha1-bRX7qITAhnnA136I53WegR4H+kE=\",
            \"dev\": true
        },
        \"yargs\": {
            \"version\": \"6.4.0\",
            \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-6.4.0.tgz\",
            \"integrity\": \"sha1-gW4ahm1VmMzzTlWW3c4i2S2kkNQ=\",
            \"dev\": true,
            \"requires\": {
                \"camelcase\": \"^3.0.0\",
                \"cliui\": \"^3.2.0\",
                \"decamelize\": \"^1.1.1\",
                \"get-caller-file\": \"^1.0.1\",
                \"os-locale\": \"^1.4.0\",
                \"read-pkg-up\": \"^1.0.1\",
                \"require-directory\": \"^2.1.1\",
                \"require-main-filename\": \"^1.0.1\",
                \"set-blocking\": \"^2.0.0\",
                \"string-width\": \"^1.0.2\",
                \"which-module\": \"^1.0.0\",
                \"window-size\": \"^0.2.0\",
                \"y18n\": \"^3.2.1\",
                \"yargs-parser\": \"^4.1.0\"
            }
        },
        \"yargs-parser\": {
            \"version\": \"4.2.1\",
            \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-4.2.1.tgz\",
            \"integrity\": \"sha1-KczqwNxPA8bIe0qfIX3RjJ90hxw=\",
            \"dev\": true,
            \"requires\": {
                \"camelcase\": \"^3.0.0\"
            }
        },
        \"yeast\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/yeast/-/yeast-0.1.2.tgz\",
            \"integrity\": \"sha1-AI4G2AlDIMNy28L47XagymyKxBk=\",
            \"dev\": true
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modern-business/package-lock.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"startbootstrap-modern-business\",
    \"version\": \"4.2.1\",
    \"lockfileVersion\": 1,
    \"requires\": true,
    \"dependencies\": {
        \"@types/events\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/@types/events/-/events-3.0.0.tgz\",
            \"integrity\": \"sha512-EaObqwIvayI5a8dCzhFrjKzVwKLxjoG9T6Ppd5CEo07LRKfQ8Yokw54r5+Wq7FaBQ+yXRvQAYPrHwya1/UFt9g==\",
            \"dev\": true
        },
        \"@types/glob\": {
            \"version\": \"7.1.1\",
            \"resolved\": \"https://registry.npmjs.org/@types/glob/-/glob-7.1.1.tgz\",
            \"integrity\": \"sha512-1Bh06cbWJUHMC97acuD6UMG29nMt0Aqz1vF3guLfG+kHHJhy3AyohZFFxYk2f7Q1SQIrNwvncxAE0N/9s70F2w==\",
            \"dev\": true,
            \"requires\": {
                \"@types/events\": \"*\",
                \"@types/minimatch\": \"*\",
                \"@types/node\": \"*\"
            }
        },
        \"@types/minimatch\": {
            \"version\": \"3.0.3\",
            \"resolved\": \"https://registry.npmjs.org/@types/minimatch/-/minimatch-3.0.3.tgz\",
            \"integrity\": \"sha512-tHq6qdbT9U1IRSGf14CL0pUlULksvY9OZ+5eEgl1N7t+OA3tGvNpxJCzuKQlsNgCVwbAs670L1vcVQi8j9HjnA==\",
            \"dev\": true
        },
        \"@types/node\": {
            \"version\": \"12.0.0\",
            \"resolved\": \"https://registry.npmjs.org/@types/node/-/node-12.0.0.tgz\",
            \"integrity\": \"sha512-Jrb/x3HT4PTJp6a4avhmJCDEVrPdqLfl3e8GGMbpkGGdwAV5UGlIs4vVEfsHHfylZVOKZWpOqmqFH8CbfOZ6kg==\",
            \"dev\": true
        },
        \"accepts\": {
            \"version\": \"1.3.7\",
            \"resolved\": \"https://registry.npmjs.org/accepts/-/accepts-1.3.7.tgz\",
            \"integrity\": \"sha512-Il80Qs2WjYlJIBNzNkK6KYqlVMTbZLXgHx2oT0pU/fjRHyEp+PEfEPY0R3WCwAGVOtauxh1hOxNgIf5bv7dQpA==\",
            \"dev\": true,
            \"requires\": {
                \"mime-types\": \"~2.1.24\",
                \"negotiator\": \"0.6.2\"
            }
        },
        \"after\": {
            \"version\": \"0.8.2\",
            \"resolved\": \"https://registry.npmjs.org/after/-/after-0.8.2.tgz\",
            \"integrity\": \"sha1-/ts5T58OAqqXaOcCvaI7UF+ufh8=\",
            \"dev\": true
        },
        \"ansi-colors\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/ansi-colors/-/ansi-colors-1.1.0.tgz\",
            \"integrity\": \"sha512-SFKX67auSNoVR38N3L+nvsPjOE0bybKTYbkf5tRvushrAPQ9V75huw0ZxBkKVeRU9kqH3d6HA4xTckbwZ4ixmA==\",
            \"dev\": true,
            \"requires\": {
                \"ansi-wrap\": \"^0.1.0\"
            }
        },
        \"ansi-gray\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-gray/-/ansi-gray-0.1.1.tgz\",
            \"integrity\": \"sha1-KWLPVOyXksSFEKPetSRDaGHvclE=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-wrap\": \"0.1.0\"
            }
        },
        \"ansi-regex\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-2.1.1.tgz\",
            \"integrity\": \"sha1-w7M6te42DYbg5ijwRorn7yfWVN8=\",
            \"dev\": true
        },
        \"ansi-styles\": {
            \"version\": \"2.2.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-2.2.1.tgz\",
            \"integrity\": \"sha1-tDLdM1i2NM914eRmQ2gkBTPB3b4=\",
            \"dev\": true
        },
        \"ansi-wrap\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/ansi-wrap/-/ansi-wrap-0.1.0.tgz\",
            \"integrity\": \"sha1-qCJQ3bABXponyoLoLqYDu/pF768=\",
            \"dev\": true
        },
        \"anymatch\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/anymatch/-/anymatch-2.0.0.tgz\",
            \"integrity\": \"sha512-5teOsQWABXHHBFP9y3skS5P3d/WfWXpv3FUpy+LorMrNYaT9pI4oLMQX7jzQ2KklNpGpWHzdCXTDT2Y3XGlZBw==\",
            \"dev\": true,
            \"requires\": {
                \"micromatch\": \"^3.1.4\",
                \"normalize-path\": \"^2.1.1\"
            },
            \"dependencies\": {
                \"normalize-path\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-2.1.1.tgz\",
                    \"integrity\": \"sha1-GrKLVW4Zg2Oowab35vogE3/mrtk=\",
                    \"dev\": true,
                    \"requires\": {
                        \"remove-trailing-separator\": \"^1.0.1\"
                    }
                }
            }
        },
        \"append-buffer\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/append-buffer/-/append-buffer-1.0.2.tgz\",
            \"integrity\": \"sha1-2CIM9GYIFSXv6lBhTz3mUU36WPE=\",
            \"dev\": true,
            \"requires\": {
                \"buffer-equal\": \"^1.0.0\"
            }
        },
        \"archy\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/archy/-/archy-1.0.0.tgz\",
            \"integrity\": \"sha1-+cjBN1fMHde8N5rHeyxipcKGjEA=\",
            \"dev\": true
        },
        \"arr-diff\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/arr-diff/-/arr-diff-4.0.0.tgz\",
            \"integrity\": \"sha1-1kYQdP6/7HHn4VI1dhoyml3HxSA=\",
            \"dev\": true
        },
        \"arr-filter\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/arr-filter/-/arr-filter-1.1.2.tgz\",
            \"integrity\": \"sha1-Q/3d0JHo7xGqTEXZzcGOLf8XEe4=\",
            \"dev\": true,
            \"requires\": {
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"arr-flatten\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/arr-flatten/-/arr-flatten-1.1.0.tgz\",
            \"integrity\": \"sha512-L3hKV5R/p5o81R7O02IGnwpDmkp6E982XhtbuwSe3O4qOtMMMtodicASA1Cny2U+aCXcNpml+m4dPsvsJ3jatg==\",
            \"dev\": true
        },
        \"arr-map\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/arr-map/-/arr-map-2.0.2.tgz\",
            \"integrity\": \"sha1-Onc0X/wc814qkYJWAfnljy4kysQ=\",
            \"dev\": true,
            \"requires\": {
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"arr-union\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/arr-union/-/arr-union-3.1.0.tgz\",
            \"integrity\": \"sha1-45sJrqne+Gao8gbiiK9jkZuuOcQ=\",
            \"dev\": true
        },
        \"array-each\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/array-each/-/array-each-1.0.1.tgz\",
            \"integrity\": \"sha1-p5SvDAWrF1KEbudTofIRoFugxE8=\",
            \"dev\": true
        },
        \"array-initial\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/array-initial/-/array-initial-1.1.0.tgz\",
            \"integrity\": \"sha1-L6dLJnOTccOUe9enrcc74zSz15U=\",
            \"dev\": true,
            \"requires\": {
                \"array-slice\": \"^1.0.0\",
                \"is-number\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"is-number\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-4.0.0.tgz\",
                    \"integrity\": \"sha512-rSklcAIlf1OmFdyAqbnWTLVelsQ58uvZ66S/ZyawjWqIviTWCjg2PzVGw8WUA+nNuPTqb4wgA+NszrJ+08LlgQ==\",
                    \"dev\": true
                }
            }
        },
        \"array-last\": {
            \"version\": \"1.3.0\",
            \"resolved\": \"https://registry.npmjs.org/array-last/-/array-last-1.3.0.tgz\",
            \"integrity\": \"sha512-eOCut5rXlI6aCOS7Z7kCplKRKyiFQ6dHFBem4PwlwKeNFk2/XxTrhRh5T9PyaEWGy/NHTZWbY+nsZlNFJu9rYg==\",
            \"dev\": true,
            \"requires\": {
                \"is-number\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"is-number\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-4.0.0.tgz\",
                    \"integrity\": \"sha512-rSklcAIlf1OmFdyAqbnWTLVelsQ58uvZ66S/ZyawjWqIviTWCjg2PzVGw8WUA+nNuPTqb4wgA+NszrJ+08LlgQ==\",
                    \"dev\": true
                }
            }
        },
        \"array-slice\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/array-slice/-/array-slice-1.1.0.tgz\",
            \"integrity\": \"sha512-B1qMD3RBP7O8o0H2KbrXDyB0IccejMF15+87Lvlor12ONPRHP6gTjXMNkt/d3ZuOGbAe66hFmaCfECI24Ufp6w==\",
            \"dev\": true
        },
        \"array-sort\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/array-sort/-/array-sort-1.0.0.tgz\",
            \"integrity\": \"sha512-ihLeJkonmdiAsD7vpgN3CRcx2J2S0TiYW+IS/5zHBI7mKUq3ySvBdzzBfD236ubDBQFiiyG3SWCPc+msQ9KoYg==\",
            \"dev\": true,
            \"requires\": {
                \"default-compare\": \"^1.0.0\",
                \"get-value\": \"^2.0.6\",
                \"kind-of\": \"^5.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
                    \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
                    \"dev\": true
                }
            }
        },
        \"array-union\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/array-union/-/array-union-1.0.2.tgz\",
            \"integrity\": \"sha1-mjRBDk9OPaI96jdb5b5w8kd47Dk=\",
            \"dev\": true,
            \"requires\": {
                \"array-uniq\": \"^1.0.1\"
            }
        },
        \"array-uniq\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/array-uniq/-/array-uniq-1.0.3.tgz\",
            \"integrity\": \"sha1-r2rId6Jcx/dOBYiUdThY39sk/bY=\",
            \"dev\": true
        },
        \"array-unique\": {
            \"version\": \"0.3.2\",
            \"resolved\": \"https://registry.npmjs.org/array-unique/-/array-unique-0.3.2.tgz\",
            \"integrity\": \"sha1-qJS3XUvE9s1nnvMkSp/Y9Gri1Cg=\",
            \"dev\": true
        },
        \"arraybuffer.slice\": {
            \"version\": \"0.0.7\",
            \"resolved\": \"https://registry.npmjs.org/arraybuffer.slice/-/arraybuffer.slice-0.0.7.tgz\",
            \"integrity\": \"sha512-wGUIVQXuehL5TCqQun8OW81jGzAWycqzFF8lFp+GOM5BXLYj3bKNsYC4daB7n6XjCqxQA/qgTJ+8ANR3acjrog==\",
            \"dev\": true
        },
        \"assign-symbols\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/assign-symbols/-/assign-symbols-1.0.0.tgz\",
            \"integrity\": \"sha1-WWZ/QfrdTyDMvCu5a41Pf3jsA2c=\",
            \"dev\": true
        },
        \"async\": {
            \"version\": \"1.5.2\",
            \"resolved\": \"https://registry.npmjs.org/async/-/async-1.5.2.tgz\",
            \"integrity\": \"sha1-7GphrlZIDAw8skHJVhjiCJL5Zyo=\",
            \"dev\": true
        },
        \"async-done\": {
            \"version\": \"1.3.1\",
            \"resolved\": \"https://registry.npmjs.org/async-done/-/async-done-1.3.1.tgz\",
            \"integrity\": \"sha512-R1BaUeJ4PMoLNJuk+0tLJgjmEqVsdN118+Z8O+alhnQDQgy0kmD5Mqi0DNEmMx2LM0Ed5yekKu+ZXYvIHceicg==\",
            \"dev\": true,
            \"requires\": {
                \"end-of-stream\": \"^1.1.0\",
                \"once\": \"^1.3.2\",
                \"process-nextick-args\": \"^1.0.7\",
                \"stream-exhaust\": \"^1.0.1\"
            },
            \"dependencies\": {
                \"process-nextick-args\": {
                    \"version\": \"1.0.7\",
                    \"resolved\": \"https://registry.npmjs.org/process-nextick-args/-/process-nextick-args-1.0.7.tgz\",
                    \"integrity\": \"sha1-FQ4gt1ZZCtP5EJPyWk8q2L/zC6M=\",
                    \"dev\": true
                }
            }
        },
        \"async-each\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/async-each/-/async-each-1.0.3.tgz\",
            \"integrity\": \"sha512-z/WhQ5FPySLdvREByI2vZiTWwCnF0moMJ1hK9YQwDTHKh6I7/uSckMetoRGb5UBZPC1z0jlw+n/XCgjeH7y1AQ==\",
            \"dev\": true
        },
        \"async-each-series\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/async-each-series/-/async-each-series-0.1.1.tgz\",
            \"integrity\": \"sha1-dhfBkXQB/Yykooqtzj266Yr+tDI=\",
            \"dev\": true
        },
        \"async-limiter\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/async-limiter/-/async-limiter-1.0.0.tgz\",
            \"integrity\": \"sha512-jp/uFnooOiO+L211eZOoSyzpOITMXx1rBITauYykG3BRYPu8h0UcxsPNB04RR5vo4Tyz3+ay17tR6JVf9qzYWg==\",
            \"dev\": true
        },
        \"async-settle\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/async-settle/-/async-settle-1.0.0.tgz\",
            \"integrity\": \"sha1-HQqRS7Aldb7IqPOnTlCA9yssDGs=\",
            \"dev\": true,
            \"requires\": {
                \"async-done\": \"^1.2.2\"
            }
        },
        \"atob\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/atob/-/atob-2.1.2.tgz\",
            \"integrity\": \"sha512-Wm6ukoaOGJi/73p/cl2GvLjTI5JM1k/O14isD73YML8StrH/7/lRFgmg8nICZgD3bZZvjwCGxtMOD3wWNAu8cg==\",
            \"dev\": true
        },
        \"axios\": {
            \"version\": \"0.19.0\",
            \"resolved\": \"https://registry.npmjs.org/axios/-/axios-0.19.0.tgz\",
            \"integrity\": \"sha512-1uvKqKQta3KBxIz14F2v06AEHZ/dIoeKfbTRkK1E5oqjDnuEerLmYTgJB5AiQZHJcljpg1TuRzdjDR06qNk0DQ==\",
            \"dev\": true,
            \"requires\": {
                \"follow-redirects\": \"1.5.10\",
                \"is-buffer\": \"^2.0.2\"
            },
            \"dependencies\": {
                \"is-buffer\": {
                    \"version\": \"2.0.3\",
                    \"resolved\": \"https://registry.npmjs.org/is-buffer/-/is-buffer-2.0.3.tgz\",
                    \"integrity\": \"sha512-U15Q7MXTuZlrbymiz95PJpZxu8IlipAp4dtS3wOdgPXx3mqBnslrWU14kxfHB+Py/+2PVKSr37dMAgM2A4uArw==\",
                    \"dev\": true
                }
            }
        },
        \"bach\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/bach/-/bach-1.2.0.tgz\",
            \"integrity\": \"sha1-Szzpa/JxNPeaG0FKUcFONMO9mIA=\",
            \"dev\": true,
            \"requires\": {
                \"arr-filter\": \"^1.1.1\",
                \"arr-flatten\": \"^1.0.1\",
                \"arr-map\": \"^2.0.0\",
                \"array-each\": \"^1.0.0\",
                \"array-initial\": \"^1.0.0\",
                \"array-last\": \"^1.1.1\",
                \"async-done\": \"^1.2.2\",
                \"async-settle\": \"^1.0.0\",
                \"now-and-later\": \"^2.0.0\"
            }
        },
        \"backo2\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/backo2/-/backo2-1.0.2.tgz\",
            \"integrity\": \"sha1-MasayLEpNjRj41s+u2n038+6eUc=\",
            \"dev\": true
        },
        \"balanced-match\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/balanced-match/-/balanced-match-1.0.0.tgz\",
            \"integrity\": \"sha1-ibTRmasr7kneFk6gK4nORi1xt2c=\",
            \"dev\": true
        },
        \"base\": {
            \"version\": \"0.11.2\",
            \"resolved\": \"https://registry.npmjs.org/base/-/base-0.11.2.tgz\",
            \"integrity\": \"sha512-5T6P4xPgpp0YDFvSWwEZ4NoE3aM4QBQXDzmVbraCkFj8zHM+mba8SyqB5DbZWyR7mYHo6Y7BdQo3MoA4m0TeQg==\",
            \"dev\": true,
            \"requires\": {
                \"cache-base\": \"^1.0.1\",
                \"class-utils\": \"^0.3.5\",
                \"component-emitter\": \"^1.2.1\",
                \"define-property\": \"^1.0.0\",
                \"isobject\": \"^3.0.1\",
                \"mixin-deep\": \"^1.2.0\",
                \"pascalcase\": \"^0.1.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
                    \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^1.0.0\"
                    }
                },
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"base64-arraybuffer\": {
            \"version\": \"0.1.5\",
            \"resolved\": \"https://registry.npmjs.org/base64-arraybuffer/-/base64-arraybuffer-0.1.5.tgz\",
            \"integrity\": \"sha1-c5JncZI7Whl0etZmqlzUv5xunOg=\",
            \"dev\": true
        },
        \"base64id\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/base64id/-/base64id-1.0.0.tgz\",
            \"integrity\": \"sha1-R2iMuZu2gE8OBtPnY7HDLlfY5rY=\",
            \"dev\": true
        },
        \"batch\": {
            \"version\": \"0.6.1\",
            \"resolved\": \"https://registry.npmjs.org/batch/-/batch-0.6.1.tgz\",
            \"integrity\": \"sha1-3DQxT05nkxgJP8dgJyUl+UvyXBY=\",
            \"dev\": true
        },
        \"better-assert\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/better-assert/-/better-assert-1.0.2.tgz\",
            \"integrity\": \"sha1-QIZrnhueC1W0gYlDEeaPr/rrxSI=\",
            \"dev\": true,
            \"requires\": {
                \"callsite\": \"1.0.0\"
            }
        },
        \"binary-extensions\": {
            \"version\": \"1.13.1\",
            \"resolved\": \"https://registry.npmjs.org/binary-extensions/-/binary-extensions-1.13.1.tgz\",
            \"integrity\": \"sha512-Un7MIEDdUC5gNpcGDV97op1Ywk748MpHcFTHoYs6qnj1Z3j7I53VG3nwZhKzoBZmbdRNnb6WRdFlwl7tSDuZGw==\",
            \"dev\": true
        },
        \"blob\": {
            \"version\": \"0.0.5\",
            \"resolved\": \"https://registry.npmjs.org/blob/-/blob-0.0.5.tgz\",
            \"integrity\": \"sha512-gaqbzQPqOoamawKg0LGVd7SzLgXS+JH61oWprSLH+P+abTczqJbhTR8CmJ2u9/bUYNmHTGJx/UEmn6doAvvuig==\",
            \"dev\": true
        },
        \"bootstrap\": {
            \"version\": \"4.3.1\",
            \"resolved\": \"https://registry.npmjs.org/bootstrap/-/bootstrap-4.3.1.tgz\",
            \"integrity\": \"sha512-rXqOmH1VilAt2DyPzluTi2blhk17bO7ef+zLLPlWvG494pDxcM234pJ8wTc/6R40UWizAIIMgxjvxZg5kmsbag==\"
        },
        \"brace-expansion\": {
            \"version\": \"1.1.11\",
            \"resolved\": \"https://registry.npmjs.org/brace-expansion/-/brace-expansion-1.1.11.tgz\",
            \"integrity\": \"sha512-iCuPHDFgrHX7H2vEI/5xpz07zSHB00TpugqhmYtVmMO6518mCuRMoOYFldEBl0g187ufozdaHgWKcYFb61qGiA==\",
            \"dev\": true,
            \"requires\": {
                \"balanced-match\": \"^1.0.0\",
                \"concat-map\": \"0.0.1\"
            }
        },
        \"braces\": {
            \"version\": \"2.3.2\",
            \"resolved\": \"https://registry.npmjs.org/braces/-/braces-2.3.2.tgz\",
            \"integrity\": \"sha512-aNdbnj9P8PjdXU4ybaWLK2IF3jc/EoDYbC7AazW6to3TRsfXxscC9UXOB5iDiEQrkyIbWp2SLQda4+QAa7nc3w==\",
            \"dev\": true,
            \"requires\": {
                \"arr-flatten\": \"^1.1.0\",
                \"array-unique\": \"^0.3.2\",
                \"extend-shallow\": \"^2.0.1\",
                \"fill-range\": \"^4.0.0\",
                \"isobject\": \"^3.0.1\",
                \"repeat-element\": \"^1.1.2\",
                \"snapdragon\": \"^0.8.1\",
                \"snapdragon-node\": \"^2.0.1\",
                \"split-string\": \"^3.0.2\",
                \"to-regex\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"browser-sync\": {
            \"version\": \"2.26.7\",
            \"resolved\": \"https://registry.npmjs.org/browser-sync/-/browser-sync-2.26.7.tgz\",
            \"integrity\": \"sha512-lY3emme0OyvA2ujEMpRmyRy9LY6gHLuTr2/ABxhIm3lADOiRXzP4dgekvnDrQqZ/Ec2Fz19lEjm6kglSG5766w==\",
            \"dev\": true,
            \"requires\": {
                \"browser-sync-client\": \"^2.26.6\",
                \"browser-sync-ui\": \"^2.26.4\",
                \"bs-recipes\": \"1.3.4\",
                \"bs-snippet-injector\": \"^2.0.1\",
                \"chokidar\": \"^2.0.4\",
                \"connect\": \"3.6.6\",
                \"connect-history-api-fallback\": \"^1\",
                \"dev-ip\": \"^1.0.1\",
                \"easy-extender\": \"^2.3.4\",
                \"eazy-logger\": \"^3\",
                \"etag\": \"^1.8.1\",
                \"fresh\": \"^0.5.2\",
                \"fs-extra\": \"3.0.1\",
                \"http-proxy\": \"1.15.2\",
                \"immutable\": \"^3\",
                \"localtunnel\": \"1.9.2\",
                \"micromatch\": \"^3.1.10\",
                \"opn\": \"5.3.0\",
                \"portscanner\": \"2.1.1\",
                \"qs\": \"6.2.3\",
                \"raw-body\": \"^2.3.2\",
                \"resp-modifier\": \"6.0.2\",
                \"rx\": \"4.1.0\",
                \"send\": \"0.16.2\",
                \"serve-index\": \"1.9.1\",
                \"serve-static\": \"1.13.2\",
                \"server-destroy\": \"1.0.1\",
                \"socket.io\": \"2.1.1\",
                \"ua-parser-js\": \"0.7.17\",
                \"yargs\": \"6.4.0\"
            }
        },
        \"browser-sync-client\": {
            \"version\": \"2.26.6\",
            \"resolved\": \"https://registry.npmjs.org/browser-sync-client/-/browser-sync-client-2.26.6.tgz\",
            \"integrity\": \"sha512-mGrkZdNzttKdf/16I+y+2dTQxoMCIpKbVIMJ/uP8ZpnKu9f9qa/2CYVtLtbjZG8nsM14EwiCrjuFTGBEnT3Gjw==\",
            \"dev\": true,
            \"requires\": {
                \"etag\": \"1.8.1\",
                \"fresh\": \"0.5.2\",
                \"mitt\": \"^1.1.3\",
                \"rxjs\": \"^5.5.6\"
            }
        },
        \"browser-sync-ui\": {
            \"version\": \"2.26.4\",
            \"resolved\": \"https://registry.npmjs.org/browser-sync-ui/-/browser-sync-ui-2.26.4.tgz\",
            \"integrity\": \"sha512-u20P3EsZoM8Pt+puoi3BU3KlbQAH1lAcV+/O4saF26qokrBqIDotmGonfWwoRbUmdxZkM9MBmA0K39ZTG1h4sA==\",
            \"dev\": true,
            \"requires\": {
                \"async-each-series\": \"0.1.1\",
                \"connect-history-api-fallback\": \"^1\",
                \"immutable\": \"^3\",
                \"server-destroy\": \"1.0.1\",
                \"socket.io-client\": \"^2.0.4\",
                \"stream-throttle\": \"^0.1.3\"
            }
        },
        \"bs-recipes\": {
            \"version\": \"1.3.4\",
            \"resolved\": \"https://registry.npmjs.org/bs-recipes/-/bs-recipes-1.3.4.tgz\",
            \"integrity\": \"sha1-DS1NSKcYyMBEdp/cT4lZLci2lYU=\",
            \"dev\": true
        },
        \"bs-snippet-injector\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/bs-snippet-injector/-/bs-snippet-injector-2.0.1.tgz\",
            \"integrity\": \"sha1-YbU5PxH1JVntEgaTEANDtu2wTdU=\",
            \"dev\": true
        },
        \"buffer-equal\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/buffer-equal/-/buffer-equal-1.0.0.tgz\",
            \"integrity\": \"sha1-WWFrSYME1Var1GaWayLu2j7KX74=\",
            \"dev\": true
        },
        \"buffer-from\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/buffer-from/-/buffer-from-1.1.1.tgz\",
            \"integrity\": \"sha512-MQcXEUbCKtEo7bhqEs6560Hyd4XaovZlO/k9V3hjVUF/zwW7KBVdSK4gIt/bzwS9MbR5qob+F5jusZsb0YQK2A==\",
            \"dev\": true
        },
        \"bytes\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/bytes/-/bytes-3.1.0.tgz\",
            \"integrity\": \"sha512-zauLjrfCG+xvoyaqLoV8bLVXXNGC4JqlxFCutSDWA6fJrTo2ZuvLYTqZ7aHBLZSMOopbzwv8f+wZcVzfVTI2Dg==\",
            \"dev\": true
        },
        \"cache-base\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/cache-base/-/cache-base-1.0.1.tgz\",
            \"integrity\": \"sha512-AKcdTnFSWATd5/GCPRxr2ChwIJ85CeyrEyjRHlKxQ56d4XJMGym0uAiKn0xbLOGOl3+yRpOTi484dVCEc5AUzQ==\",
            \"dev\": true,
            \"requires\": {
                \"collection-visit\": \"^1.0.0\",
                \"component-emitter\": \"^1.2.1\",
                \"get-value\": \"^2.0.6\",
                \"has-value\": \"^1.0.0\",
                \"isobject\": \"^3.0.1\",
                \"set-value\": \"^2.0.0\",
                \"to-object-path\": \"^0.3.0\",
                \"union-value\": \"^1.0.0\",
                \"unset-value\": \"^1.0.0\"
            }
        },
        \"callsite\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/callsite/-/callsite-1.0.0.tgz\",
            \"integrity\": \"sha1-KAOY5dZkvXQDi28JBRU+borxvCA=\",
            \"dev\": true
        },
        \"camelcase\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-3.0.0.tgz\",
            \"integrity\": \"sha1-MvxLn82vhF/N9+c7uXysImHwqwo=\",
            \"dev\": true
        },
        \"chalk\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-1.1.3.tgz\",
            \"integrity\": \"sha1-qBFcVeSnAv5NFQq9OHKCKn4J/Jg=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-styles\": \"^2.2.1\",
                \"escape-string-regexp\": \"^1.0.2\",
                \"has-ansi\": \"^2.0.0\",
                \"strip-ansi\": \"^3.0.0\",
                \"supports-color\": \"^2.0.0\"
            }
        },
        \"chokidar\": {
            \"version\": \"2.1.5\",
            \"resolved\": \"https://registry.npmjs.org/chokidar/-/chokidar-2.1.5.tgz\",
            \"integrity\": \"sha512-i0TprVWp+Kj4WRPtInjexJ8Q+BqTE909VpH8xVhXrJkoc5QC8VO9TryGOqTr+2hljzc1sC62t22h5tZePodM/A==\",
            \"dev\": true,
            \"requires\": {
                \"anymatch\": \"^2.0.0\",
                \"async-each\": \"^1.0.1\",
                \"braces\": \"^2.3.2\",
                \"fsevents\": \"^1.2.7\",
                \"glob-parent\": \"^3.1.0\",
                \"inherits\": \"^2.0.3\",
                \"is-binary-path\": \"^1.0.0\",
                \"is-glob\": \"^4.0.0\",
                \"normalize-path\": \"^3.0.0\",
                \"path-is-absolute\": \"^1.0.0\",
                \"readdirp\": \"^2.2.1\",
                \"upath\": \"^1.1.1\"
            }
        },
        \"class-utils\": {
            \"version\": \"0.3.6\",
            \"resolved\": \"https://registry.npmjs.org/class-utils/-/class-utils-0.3.6.tgz\",
            \"integrity\": \"sha512-qOhPa/Fj7s6TY8H8esGu5QNpMMQxz79h+urzrNYN6mn+9BnxlDGf5QZ+XeCDsxSjPqsSR56XOZOJmpeurnLMeg==\",
            \"dev\": true,
            \"requires\": {
                \"arr-union\": \"^3.1.0\",
                \"define-property\": \"^0.2.5\",
                \"isobject\": \"^3.0.0\",
                \"static-extend\": \"^0.1.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                }
            }
        },
        \"cliui\": {
            \"version\": \"3.2.0\",
            \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-3.2.0.tgz\",
            \"integrity\": \"sha1-EgYBU3qRbSmUD5NNo7SNWFo5IT0=\",
            \"dev\": true,
            \"requires\": {
                \"string-width\": \"^1.0.1\",
                \"strip-ansi\": \"^3.0.1\",
                \"wrap-ansi\": \"^2.0.0\"
            }
        },
        \"clone\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/clone/-/clone-2.1.2.tgz\",
            \"integrity\": \"sha1-G39Ln1kfHo+DZwQBYANFoCiHQ18=\",
            \"dev\": true
        },
        \"clone-buffer\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/clone-buffer/-/clone-buffer-1.0.0.tgz\",
            \"integrity\": \"sha1-4+JbIHrE5wGvch4staFnksrD3Fg=\",
            \"dev\": true
        },
        \"clone-stats\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/clone-stats/-/clone-stats-1.0.0.tgz\",
            \"integrity\": \"sha1-s3gt/4u1R04Yuba/D9/ngvh3doA=\",
            \"dev\": true
        },
        \"cloneable-readable\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/cloneable-readable/-/cloneable-readable-1.1.2.tgz\",
            \"integrity\": \"sha512-Bq6+4t+lbM8vhTs/Bef5c5AdEMtapp/iFb6+s4/Hh9MVTt8OLKH7ZOOZSCT+Ys7hsHvqv0GuMPJ1lnQJVHvxpg==\",
            \"dev\": true,
            \"requires\": {
                \"inherits\": \"^2.0.1\",
                \"process-nextick-args\": \"^2.0.0\",
                \"readable-stream\": \"^2.3.5\"
            }
        },
        \"code-point-at\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/code-point-at/-/code-point-at-1.1.0.tgz\",
            \"integrity\": \"sha1-DQcLTQQ6W+ozovGkDi7bPZpMz3c=\",
            \"dev\": true
        },
        \"collection-map\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/collection-map/-/collection-map-1.0.0.tgz\",
            \"integrity\": \"sha1-rqDwb40mx4DCt1SUOFVEsiVa8Yw=\",
            \"dev\": true,
            \"requires\": {
                \"arr-map\": \"^2.0.2\",
                \"for-own\": \"^1.0.0\",
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"collection-visit\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/collection-visit/-/collection-visit-1.0.0.tgz\",
            \"integrity\": \"sha1-S8A3PBZLwykbTTaMgpzxqApZ3KA=\",
            \"dev\": true,
            \"requires\": {
                \"map-visit\": \"^1.0.0\",
                \"object-visit\": \"^1.0.0\"
            }
        },
        \"color-support\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/color-support/-/color-support-1.1.3.tgz\",
            \"integrity\": \"sha512-qiBjkpbMLO/HL68y+lh4q0/O1MZFj2RX6X/KmMa3+gJD3z+WwI1ZzDHysvqHGS3mP6mznPckpXmw1nI9cJjyRg==\",
            \"dev\": true
        },
        \"commander\": {
            \"version\": \"2.20.0\",
            \"resolved\": \"https://registry.npmjs.org/commander/-/commander-2.20.0.tgz\",
            \"integrity\": \"sha512-7j2y+40w61zy6YC2iRNpUe/NwhNyoXrYpHMrSunaMG64nRnaf96zO/KMQR4OyN/UnE5KLyEBnKHd4aG3rskjpQ==\",
            \"dev\": true
        },
        \"component-bind\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/component-bind/-/component-bind-1.0.0.tgz\",
            \"integrity\": \"sha1-AMYIq33Nk4l8AAllGx06jh5zu9E=\",
            \"dev\": true
        },
        \"component-emitter\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/component-emitter/-/component-emitter-1.2.1.tgz\",
            \"integrity\": \"sha1-E3kY1teCg/ffemt8WmPhQOaUJeY=\",
            \"dev\": true
        },
        \"component-inherit\": {
            \"version\": \"0.0.3\",
            \"resolved\": \"https://registry.npmjs.org/component-inherit/-/component-inherit-0.0.3.tgz\",
            \"integrity\": \"sha1-ZF/ErfWLcrZJ1crmUTVhnbJv8UM=\",
            \"dev\": true
        },
        \"concat-map\": {
            \"version\": \"0.0.1\",
            \"resolved\": \"https://registry.npmjs.org/concat-map/-/concat-map-0.0.1.tgz\",
            \"integrity\": \"sha1-2Klr13/Wjfd5OnMDajug1UBdR3s=\",
            \"dev\": true
        },
        \"concat-stream\": {
            \"version\": \"1.6.2\",
            \"resolved\": \"https://registry.npmjs.org/concat-stream/-/concat-stream-1.6.2.tgz\",
            \"integrity\": \"sha512-27HBghJxjiZtIk3Ycvn/4kbJk/1uZuJFfuPEns6LaEvpvG1f0hTea8lilrouyo9mVc2GWdcEZ8OLoGmSADlrCw==\",
            \"dev\": true,
            \"requires\": {
                \"buffer-from\": \"^1.0.0\",
                \"inherits\": \"^2.0.3\",
                \"readable-stream\": \"^2.2.2\",
                \"typedarray\": \"^0.0.6\"
            }
        },
        \"connect\": {
            \"version\": \"3.6.6\",
            \"resolved\": \"https://registry.npmjs.org/connect/-/connect-3.6.6.tgz\",
            \"integrity\": \"sha1-Ce/2xVr3I24TcTWnJXSFi2eG9SQ=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"2.6.9\",
                \"finalhandler\": \"1.1.0\",
                \"parseurl\": \"~1.3.2\",
                \"utils-merge\": \"1.0.1\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                }
            }
        },
        \"connect-history-api-fallback\": {
            \"version\": \"1.6.0\",
            \"resolved\": \"https://registry.npmjs.org/connect-history-api-fallback/-/connect-history-api-fallback-1.6.0.tgz\",
            \"integrity\": \"sha512-e54B99q/OUoH64zYYRf3HBP5z24G38h5D3qXu23JGRoigpX5Ss4r9ZnDk3g0Z8uQC2x2lPaJ+UlWBc1ZWBWdLg==\",
            \"dev\": true
        },
        \"convert-source-map\": {
            \"version\": \"1.6.0\",
            \"resolved\": \"https://registry.npmjs.org/convert-source-map/-/convert-source-map-1.6.0.tgz\",
            \"integrity\": \"sha512-eFu7XigvxdZ1ETfbgPBohgyQ/Z++C0eEhTor0qRwBw9unw+L0/6V8wkSuGgzdThkiS5lSpdptOQPD8Ak40a+7A==\",
            \"dev\": true,
            \"requires\": {
                \"safe-buffer\": \"~5.1.1\"
            }
        },
        \"cookie\": {
            \"version\": \"0.3.1\",
            \"resolved\": \"https://registry.npmjs.org/cookie/-/cookie-0.3.1.tgz\",
            \"integrity\": \"sha1-5+Ch+e9DtMi6klxcWpboBtFoc7s=\",
            \"dev\": true
        },
        \"copy-descriptor\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/copy-descriptor/-/copy-descriptor-0.1.1.tgz\",
            \"integrity\": \"sha1-Z29us8OZl8LuGsOpJP1hJHSPV40=\",
            \"dev\": true
        },
        \"copy-props\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/copy-props/-/copy-props-2.0.4.tgz\",
            \"integrity\": \"sha512-7cjuUME+p+S3HZlbllgsn2CDwS+5eCCX16qBgNC4jgSTf49qR1VKy/Zhl400m0IQXl/bPGEVqncgUUMjrr4s8A==\",
            \"dev\": true,
            \"requires\": {
                \"each-props\": \"^1.3.0\",
                \"is-plain-object\": \"^2.0.1\"
            }
        },
        \"core-util-is\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/core-util-is/-/core-util-is-1.0.2.tgz\",
            \"integrity\": \"sha1-tf1UIgqivFq1eqtxQMlAdUUDwac=\",
            \"dev\": true
        },
        \"d\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/d/-/d-1.0.0.tgz\",
            \"integrity\": \"sha1-dUu1v+VUUdpppYuU1F9MWwRi1Y8=\",
            \"dev\": true,
            \"requires\": {
                \"es5-ext\": \"^0.10.9\"
            }
        },
        \"debug\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.1.0.tgz\",
            \"integrity\": \"sha512-OX8XqP7/1a9cqkxYw2yXss15f26NKWBpDXQd0/uK/KPqdQhxbPa994hnzjcE2VqQpDslf55723cKPUOGSmMY3g==\",
            \"dev\": true,
            \"requires\": {
                \"ms\": \"2.0.0\"
            }
        },
        \"decamelize\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/decamelize/-/decamelize-1.2.0.tgz\",
            \"integrity\": \"sha1-9lNNFRSCabIDUue+4m9QH5oZEpA=\",
            \"dev\": true
        },
        \"decode-uri-component\": {
            \"version\": \"0.2.0\",
            \"resolved\": \"https://registry.npmjs.org/decode-uri-component/-/decode-uri-component-0.2.0.tgz\",
            \"integrity\": \"sha1-6zkTMzRYd1y4TNGh+uBiEGu4dUU=\",
            \"dev\": true
        },
        \"default-compare\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/default-compare/-/default-compare-1.0.0.tgz\",
            \"integrity\": \"sha512-QWfXlM0EkAbqOCbD/6HjdwT19j7WCkMyiRhWilc4H9/5h/RzTF9gv5LYh1+CmDV5d1rki6KAWLtQale0xt20eQ==\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^5.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
                    \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
                    \"dev\": true
                }
            }
        },
        \"default-resolution\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/default-resolution/-/default-resolution-2.0.0.tgz\",
            \"integrity\": \"sha1-vLgrqnKtebQmp2cy8aga1t8m1oQ=\",
            \"dev\": true
        },
        \"define-properties\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/define-properties/-/define-properties-1.1.3.tgz\",
            \"integrity\": \"sha512-3MqfYKj2lLzdMSf8ZIZE/V+Zuy+BgD6f164e8K2w7dgnpKArBDerGYpM46IYYcjnkdPNMjPk9A6VFB8+3SKlXQ==\",
            \"dev\": true,
            \"requires\": {
                \"object-keys\": \"^1.0.12\"
            }
        },
        \"define-property\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-2.0.2.tgz\",
            \"integrity\": \"sha512-jwK2UV4cnPpbcG7+VRARKTZPUWowwXA8bzH5NP6ud0oeAxyYPuGZUAC7hMugpCdz4BeSZl2Dl9k66CHJ/46ZYQ==\",
            \"dev\": true,
            \"requires\": {
                \"is-descriptor\": \"^1.0.2\",
                \"isobject\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"del\": {
            \"version\": \"4.1.1\",
            \"resolved\": \"https://registry.npmjs.org/del/-/del-4.1.1.tgz\",
            \"integrity\": \"sha512-QwGuEUouP2kVwQenAsOof5Fv8K9t3D8Ca8NxcXKrIpEHjTXK5J2nXLdP+ALI1cgv8wj7KuwBhTwBkOZSJKM5XQ==\",
            \"dev\": true,
            \"requires\": {
                \"@types/glob\": \"^7.1.1\",
                \"globby\": \"^6.1.0\",
                \"is-path-cwd\": \"^2.0.0\",
                \"is-path-in-cwd\": \"^2.0.0\",
                \"p-map\": \"^2.0.0\",
                \"pify\": \"^4.0.1\",
                \"rimraf\": \"^2.6.3\"
            },
            \"dependencies\": {
                \"pify\": {
                    \"version\": \"4.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/pify/-/pify-4.0.1.tgz\",
                    \"integrity\": \"sha512-uB80kBFb/tfd68bVleG9T5GGsGPjJrLAUpR5PZIrhBnIaRTQRjqdJSsIKkOP6OAIFbj7GOrcudc5pNjZ+geV2g==\",
                    \"dev\": true
                }
            }
        },
        \"depd\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/depd/-/depd-1.1.2.tgz\",
            \"integrity\": \"sha1-m81S4UwJd2PnSbJ0xDRu0uVgtak=\",
            \"dev\": true
        },
        \"destroy\": {
            \"version\": \"1.0.4\",
            \"resolved\": \"https://registry.npmjs.org/destroy/-/destroy-1.0.4.tgz\",
            \"integrity\": \"sha1-l4hXRCxEdJ5CBmE+N5RiBYJqvYA=\",
            \"dev\": true
        },
        \"detect-file\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/detect-file/-/detect-file-1.0.0.tgz\",
            \"integrity\": \"sha1-8NZtA2cqglyxtzvbP+YjEMjlUrc=\",
            \"dev\": true
        },
        \"dev-ip\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/dev-ip/-/dev-ip-1.0.1.tgz\",
            \"integrity\": \"sha1-p2o+0YVb56ASu4rBbLgPPADcKPA=\",
            \"dev\": true
        },
        \"duplexify\": {
            \"version\": \"3.7.1\",
            \"resolved\": \"https://registry.npmjs.org/duplexify/-/duplexify-3.7.1.tgz\",
            \"integrity\": \"sha512-07z8uv2wMyS51kKhD1KsdXJg5WQ6t93RneqRxUHnskXVtlYYkLqM0gqStQZ3pj073g687jPCHrqNfCzawLYh5g==\",
            \"dev\": true,
            \"requires\": {
                \"end-of-stream\": \"^1.0.0\",
                \"inherits\": \"^2.0.1\",
                \"readable-stream\": \"^2.0.0\",
                \"stream-shift\": \"^1.0.0\"
            }
        },
        \"each-props\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/each-props/-/each-props-1.3.2.tgz\",
            \"integrity\": \"sha512-vV0Hem3zAGkJAyU7JSjixeU66rwdynTAa1vofCrSA5fEln+m67Az9CcnkVD776/fsN/UjIWmBDoNRS6t6G9RfA==\",
            \"dev\": true,
            \"requires\": {
                \"is-plain-object\": \"^2.0.1\",
                \"object.defaults\": \"^1.1.0\"
            }
        },
        \"easy-extender\": {
            \"version\": \"2.3.4\",
            \"resolved\": \"https://registry.npmjs.org/easy-extender/-/easy-extender-2.3.4.tgz\",
            \"integrity\": \"sha512-8cAwm6md1YTiPpOvDULYJL4ZS6WfM5/cTeVVh4JsvyYZAoqlRVUpHL9Gr5Fy7HA6xcSZicUia3DeAgO3Us8E+Q==\",
            \"dev\": true,
            \"requires\": {
                \"lodash\": \"^4.17.10\"
            }
        },
        \"eazy-logger\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/eazy-logger/-/eazy-logger-3.0.2.tgz\",
            \"integrity\": \"sha1-oyWqXlPROiIliJsqxBE7K5Y29Pw=\",
            \"dev\": true,
            \"requires\": {
                \"tfunk\": \"^3.0.1\"
            }
        },
        \"ee-first\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ee-first/-/ee-first-1.1.1.tgz\",
            \"integrity\": \"sha1-WQxhFWsK4vTwJVcyoViyZrxWsh0=\",
            \"dev\": true
        },
        \"encodeurl\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/encodeurl/-/encodeurl-1.0.2.tgz\",
            \"integrity\": \"sha1-rT/0yG7C0CkyL1oCw6mmBslbP1k=\",
            \"dev\": true
        },
        \"end-of-stream\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/end-of-stream/-/end-of-stream-1.4.1.tgz\",
            \"integrity\": \"sha512-1MkrZNvWTKCaigbn+W15elq2BB/L22nqrSY5DKlo3X6+vclJm8Bb5djXJBmEX6fS3+zCh/F4VBK5Z2KxJt4s2Q==\",
            \"dev\": true,
            \"requires\": {
                \"once\": \"^1.4.0\"
            }
        },
        \"engine.io\": {
            \"version\": \"3.2.1\",
            \"resolved\": \"https://registry.npmjs.org/engine.io/-/engine.io-3.2.1.tgz\",
            \"integrity\": \"sha512-+VlKzHzMhaU+GsCIg4AoXF1UdDFjHHwMmMKqMJNDNLlUlejz58FCy4LBqB2YVJskHGYl06BatYWKP2TVdVXE5w==\",
            \"dev\": true,
            \"requires\": {
                \"accepts\": \"~1.3.4\",
                \"base64id\": \"1.0.0\",
                \"cookie\": \"0.3.1\",
                \"debug\": \"~3.1.0\",
                \"engine.io-parser\": \"~2.1.0\",
                \"ws\": \"~3.3.1\"
            },
            \"dependencies\": {
                \"ws\": {
                    \"version\": \"3.3.3\",
                    \"resolved\": \"https://registry.npmjs.org/ws/-/ws-3.3.3.tgz\",
                    \"integrity\": \"sha512-nnWLa/NwZSt4KQJu51MYlCcSQ5g7INpOrOMt4XV8j4dqTXdmlUmSHQ8/oLC069ckre0fRsgfvsKwbTdtKLCDkA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"async-limiter\": \"~1.0.0\",
                        \"safe-buffer\": \"~5.1.0\",
                        \"ultron\": \"~1.1.0\"
                    }
                }
            }
        },
        \"engine.io-client\": {
            \"version\": \"3.3.2\",
            \"resolved\": \"https://registry.npmjs.org/engine.io-client/-/engine.io-client-3.3.2.tgz\",
            \"integrity\": \"sha512-y0CPINnhMvPuwtqXfsGuWE8BB66+B6wTtCofQDRecMQPYX3MYUZXFNKDhdrSe3EVjgOu4V3rxdeqN/Tr91IgbQ==\",
            \"dev\": true,
            \"requires\": {
                \"component-emitter\": \"1.2.1\",
                \"component-inherit\": \"0.0.3\",
                \"debug\": \"~3.1.0\",
                \"engine.io-parser\": \"~2.1.1\",
                \"has-cors\": \"1.1.0\",
                \"indexof\": \"0.0.1\",
                \"parseqs\": \"0.0.5\",
                \"parseuri\": \"0.0.5\",
                \"ws\": \"~6.1.0\",
                \"xmlhttprequest-ssl\": \"~1.5.4\",
                \"yeast\": \"0.1.2\"
            }
        },
        \"engine.io-parser\": {
            \"version\": \"2.1.3\",
            \"resolved\": \"https://registry.npmjs.org/engine.io-parser/-/engine.io-parser-2.1.3.tgz\",
            \"integrity\": \"sha512-6HXPre2O4Houl7c4g7Ic/XzPnHBvaEmN90vtRO9uLmwtRqQmTOw0QMevL1TOfL2Cpu1VzsaTmMotQgMdkzGkVA==\",
            \"dev\": true,
            \"requires\": {
                \"after\": \"0.8.2\",
                \"arraybuffer.slice\": \"~0.0.7\",
                \"base64-arraybuffer\": \"0.1.5\",
                \"blob\": \"0.0.5\",
                \"has-binary2\": \"~1.0.2\"
            }
        },
        \"error-ex\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/error-ex/-/error-ex-1.3.2.tgz\",
            \"integrity\": \"sha512-7dFHNmqeFSEt2ZBsCriorKnn3Z2pj+fd9kmI6QoWw4//DL+icEBfc0U7qJCisqrTsKTjw4fNFy2pW9OqStD84g==\",
            \"dev\": true,
            \"requires\": {
                \"is-arrayish\": \"^0.2.1\"
            }
        },
        \"es5-ext\": {
            \"version\": \"0.10.50\",
            \"resolved\": \"https://registry.npmjs.org/es5-ext/-/es5-ext-0.10.50.tgz\",
            \"integrity\": \"sha512-KMzZTPBkeQV/JcSQhI5/z6d9VWJ3EnQ194USTUwIYZ2ZbpN8+SGXQKt1h68EX44+qt+Fzr8DO17vnxrw7c3agw==\",
            \"dev\": true,
            \"requires\": {
                \"es6-iterator\": \"~2.0.3\",
                \"es6-symbol\": \"~3.1.1\",
                \"next-tick\": \"^1.0.0\"
            }
        },
        \"es6-iterator\": {
            \"version\": \"2.0.3\",
            \"resolved\": \"https://registry.npmjs.org/es6-iterator/-/es6-iterator-2.0.3.tgz\",
            \"integrity\": \"sha1-p96IkUGgWpSwhUQDstCg+/qY87c=\",
            \"dev\": true,
            \"requires\": {
                \"d\": \"1\",
                \"es5-ext\": \"^0.10.35\",
                \"es6-symbol\": \"^3.1.1\"
            }
        },
        \"es6-symbol\": {
            \"version\": \"3.1.1\",
            \"resolved\": \"https://registry.npmjs.org/es6-symbol/-/es6-symbol-3.1.1.tgz\",
            \"integrity\": \"sha1-vwDvT9q2uhtG7Le2KbTH7VcVzHc=\",
            \"dev\": true,
            \"requires\": {
                \"d\": \"1\",
                \"es5-ext\": \"~0.10.14\"
            }
        },
        \"es6-weak-map\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/es6-weak-map/-/es6-weak-map-2.0.2.tgz\",
            \"integrity\": \"sha1-XjqzIlH/0VOKH45f+hNXdy+S2W8=\",
            \"dev\": true,
            \"requires\": {
                \"d\": \"1\",
                \"es5-ext\": \"^0.10.14\",
                \"es6-iterator\": \"^2.0.1\",
                \"es6-symbol\": \"^3.1.1\"
            }
        },
        \"escape-html\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/escape-html/-/escape-html-1.0.3.tgz\",
            \"integrity\": \"sha1-Aljq5NPQwJdN4cFpGI7wBR0dGYg=\",
            \"dev\": true
        },
        \"escape-string-regexp\": {
            \"version\": \"1.0.5\",
            \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-1.0.5.tgz\",
            \"integrity\": \"sha1-G2HAViGQqN/2rjuyzwIAyhMLhtQ=\",
            \"dev\": true
        },
        \"etag\": {
            \"version\": \"1.8.1\",
            \"resolved\": \"https://registry.npmjs.org/etag/-/etag-1.8.1.tgz\",
            \"integrity\": \"sha1-Qa4u62XvpiJorr/qg6x9eSmbCIc=\",
            \"dev\": true
        },
        \"eventemitter3\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/eventemitter3/-/eventemitter3-1.2.0.tgz\",
            \"integrity\": \"sha1-HIaZHYFq0eUEdQ5zh0Ik7PO+xQg=\",
            \"dev\": true
        },
        \"expand-brackets\": {
            \"version\": \"2.1.4\",
            \"resolved\": \"https://registry.npmjs.org/expand-brackets/-/expand-brackets-2.1.4.tgz\",
            \"integrity\": \"sha1-t3c14xXOMPa27/D4OwQVGiJEliI=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"^2.3.3\",
                \"define-property\": \"^0.2.5\",
                \"extend-shallow\": \"^2.0.1\",
                \"posix-character-classes\": \"^0.1.0\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                },
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"expand-tilde\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/expand-tilde/-/expand-tilde-2.0.2.tgz\",
            \"integrity\": \"sha1-l+gBqgUt8CRU3kawK/YhZCzchQI=\",
            \"dev\": true,
            \"requires\": {
                \"homedir-polyfill\": \"^1.0.1\"
            }
        },
        \"extend\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/extend/-/extend-3.0.2.tgz\",
            \"integrity\": \"sha512-fjquC59cD7CyW6urNXK0FBufkZcoiGG80wTuPujX590cB5Ttln20E2UB4S/WARVqhXffZl2LNgS+gQdPIIim/g==\",
            \"dev\": true
        },
        \"extend-shallow\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-3.0.2.tgz\",
            \"integrity\": \"sha1-Jqcarwc7OfshJxcnRhMcJwQCjbg=\",
            \"dev\": true,
            \"requires\": {
                \"assign-symbols\": \"^1.0.0\",
                \"is-extendable\": \"^1.0.1\"
            },
            \"dependencies\": {
                \"is-extendable\": {
                    \"version\": \"1.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
                    \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-plain-object\": \"^2.0.4\"
                    }
                }
            }
        },
        \"extglob\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/extglob/-/extglob-2.0.4.tgz\",
            \"integrity\": \"sha512-Nmb6QXkELsuBr24CJSkilo6UHHgbekK5UiZgfE6UHD3Eb27YC6oD+bhcT+tJ6cl8dmsgdQxnWlcry8ksBIBLpw==\",
            \"dev\": true,
            \"requires\": {
                \"array-unique\": \"^0.3.2\",
                \"define-property\": \"^1.0.0\",
                \"expand-brackets\": \"^2.1.4\",
                \"extend-shallow\": \"^2.0.1\",
                \"fragment-cache\": \"^0.2.1\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
                    \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^1.0.0\"
                    }
                },
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                },
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"fancy-log\": {
            \"version\": \"1.3.3\",
            \"resolved\": \"https://registry.npmjs.org/fancy-log/-/fancy-log-1.3.3.tgz\",
            \"integrity\": \"sha512-k9oEhlyc0FrVh25qYuSELjr8oxsCoc4/LEZfg2iJJrfEk/tZL9bCoJE47gqAvI2m/AUjluCS4+3I0eTx8n3AEw==\",
            \"dev\": true,
            \"requires\": {
                \"ansi-gray\": \"^0.1.1\",
                \"color-support\": \"^1.1.3\",
                \"parse-node-version\": \"^1.0.0\",
                \"time-stamp\": \"^1.0.0\"
            }
        },
        \"fill-range\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/fill-range/-/fill-range-4.0.0.tgz\",
            \"integrity\": \"sha1-1USBHUKPmOsGpj3EAtJAPDKMOPc=\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^2.0.1\",
                \"is-number\": \"^3.0.0\",
                \"repeat-string\": \"^1.6.1\",
                \"to-regex-range\": \"^2.1.0\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"finalhandler\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/finalhandler/-/finalhandler-1.1.0.tgz\",
            \"integrity\": \"sha1-zgtoVbRYU+eRsvzGgARtiCU91/U=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"2.6.9\",
                \"encodeurl\": \"~1.0.1\",
                \"escape-html\": \"~1.0.3\",
                \"on-finished\": \"~2.3.0\",
                \"parseurl\": \"~1.3.2\",
                \"statuses\": \"~1.3.1\",
                \"unpipe\": \"~1.0.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                }
            }
        },
        \"find-up\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-1.1.2.tgz\",
            \"integrity\": \"sha1-ay6YIrGizgpgq2TWEOzK1TyyTQ8=\",
            \"dev\": true,
            \"requires\": {
                \"path-exists\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"findup-sync\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/findup-sync/-/findup-sync-3.0.0.tgz\",
            \"integrity\": \"sha512-YbffarhcicEhOrm4CtrwdKBdCuz576RLdhJDsIfvNtxUuhdRet1qZcsMjqbePtAseKdAnDyM/IyXbu7PRPRLYg==\",
            \"dev\": true,
            \"requires\": {
                \"detect-file\": \"^1.0.0\",
                \"is-glob\": \"^4.0.0\",
                \"micromatch\": \"^3.0.4\",
                \"resolve-dir\": \"^1.0.1\"
            }
        },
        \"fined\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/fined/-/fined-1.2.0.tgz\",
            \"integrity\": \"sha512-ZYDqPLGxDkDhDZBjZBb+oD1+j0rA4E0pXY50eplAAOPg2N/gUBSSk5IM1/QhPfyVo19lJ+CvXpqfvk+b2p/8Ng==\",
            \"dev\": true,
            \"requires\": {
                \"expand-tilde\": \"^2.0.2\",
                \"is-plain-object\": \"^2.0.3\",
                \"object.defaults\": \"^1.1.0\",
                \"object.pick\": \"^1.2.0\",
                \"parse-filepath\": \"^1.0.1\"
            }
        },
        \"flagged-respawn\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/flagged-respawn/-/flagged-respawn-1.0.1.tgz\",
            \"integrity\": \"sha512-lNaHNVymajmk0OJMBn8fVUAU1BtDeKIqKoVhk4xAALB57aALg6b4W0MfJ/cUE0g9YBXy5XhSlPIpYIJ7HaY/3Q==\",
            \"dev\": true
        },
        \"flush-write-stream\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/flush-write-stream/-/flush-write-stream-1.1.1.tgz\",
            \"integrity\": \"sha512-3Z4XhFZ3992uIq0XOqb9AreonueSYphE6oYbpt5+3u06JWklbsPkNv3ZKkP9Bz/r+1MWCaMoSQ28P85+1Yc77w==\",
            \"dev\": true,
            \"requires\": {
                \"inherits\": \"^2.0.3\",
                \"readable-stream\": \"^2.3.6\"
            }
        },
        \"follow-redirects\": {
            \"version\": \"1.5.10\",
            \"resolved\": \"https://registry.npmjs.org/follow-redirects/-/follow-redirects-1.5.10.tgz\",
            \"integrity\": \"sha512-0V5l4Cizzvqt5D44aTXbFZz+FtyXV1vrDN6qrelxtfYQKW0KO0W2T/hkE8xvGa/540LkZlkaUjO4ailYTFtHVQ==\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"=3.1.0\"
            }
        },
        \"for-in\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/for-in/-/for-in-1.0.2.tgz\",
            \"integrity\": \"sha1-gQaNKVqBQuwKxybG4iAMMPttXoA=\",
            \"dev\": true
        },
        \"for-own\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/for-own/-/for-own-1.0.0.tgz\",
            \"integrity\": \"sha1-xjMy9BXO3EsE2/5wz4NklMU8tEs=\",
            \"dev\": true,
            \"requires\": {
                \"for-in\": \"^1.0.1\"
            }
        },
        \"fragment-cache\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/fragment-cache/-/fragment-cache-0.2.1.tgz\",
            \"integrity\": \"sha1-QpD60n8T6Jvn8zeZxrxaCr//DRk=\",
            \"dev\": true,
            \"requires\": {
                \"map-cache\": \"^0.2.2\"
            }
        },
        \"fresh\": {
            \"version\": \"0.5.2\",
            \"resolved\": \"https://registry.npmjs.org/fresh/-/fresh-0.5.2.tgz\",
            \"integrity\": \"sha1-PYyt2Q2XZWn6g1qx+OSyOhBWBac=\",
            \"dev\": true
        },
        \"fs-extra\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/fs-extra/-/fs-extra-3.0.1.tgz\",
            \"integrity\": \"sha1-N5TzeMWLNC6n27sjCVEJxLO2IpE=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"jsonfile\": \"^3.0.0\",
                \"universalify\": \"^0.1.0\"
            }
        },
        \"fs-mkdirp-stream\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/fs-mkdirp-stream/-/fs-mkdirp-stream-1.0.0.tgz\",
            \"integrity\": \"sha1-C3gV/DIBxqaeFNuYzgmMFpNSWes=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.11\",
                \"through2\": \"^2.0.3\"
            }
        },
        \"fs.realpath\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/fs.realpath/-/fs.realpath-1.0.0.tgz\",
            \"integrity\": \"sha1-FQStJSMVjKpA20onh8sBQRmU6k8=\",
            \"dev\": true
        },
        \"fsevents\": {
            \"version\": \"1.2.9\",
            \"resolved\": \"https://registry.npmjs.org/fsevents/-/fsevents-1.2.9.tgz\",
            \"integrity\": \"sha512-oeyj2H3EjjonWcFjD5NvZNE9Rqe4UW+nQBU2HNeKw0koVLEFIhtyETyAakeAM3de7Z/SW5kcA+fZUait9EApnw==\",
            \"dev\": true,
            \"optional\": true,
            \"requires\": {
                \"nan\": \"^2.12.1\",
                \"node-pre-gyp\": \"^0.12.0\"
            },
            \"dependencies\": {
                \"abbrev\": {
                    \"version\": \"1.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"ansi-regex\": {
                    \"version\": \"2.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"aproba\": {
                    \"version\": \"1.2.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"are-we-there-yet\": {
                    \"version\": \"1.1.5\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"delegates\": \"^1.0.0\",
                        \"readable-stream\": \"^2.0.6\"
                    }
                },
                \"balanced-match\": {
                    \"version\": \"1.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"brace-expansion\": {
                    \"version\": \"1.1.11\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"balanced-match\": \"^1.0.0\",
                        \"concat-map\": \"0.0.1\"
                    }
                },
                \"chownr\": {
                    \"version\": \"1.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"code-point-at\": {
                    \"version\": \"1.1.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"concat-map\": {
                    \"version\": \"0.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"console-control-strings\": {
                    \"version\": \"1.1.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"core-util-is\": {
                    \"version\": \"1.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"debug\": {
                    \"version\": \"4.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"ms\": \"^2.1.1\"
                    }
                },
                \"deep-extend\": {
                    \"version\": \"0.6.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"delegates\": {
                    \"version\": \"1.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"detect-libc\": {
                    \"version\": \"1.0.3\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"fs-minipass\": {
                    \"version\": \"1.2.5\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"minipass\": \"^2.2.1\"
                    }
                },
                \"fs.realpath\": {
                    \"version\": \"1.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"gauge\": {
                    \"version\": \"2.7.4\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"aproba\": \"^1.0.3\",
                        \"console-control-strings\": \"^1.0.0\",
                        \"has-unicode\": \"^2.0.0\",
                        \"object-assign\": \"^4.1.0\",
                        \"signal-exit\": \"^3.0.0\",
                        \"string-width\": \"^1.0.1\",
                        \"strip-ansi\": \"^3.0.1\",
                        \"wide-align\": \"^1.1.0\"
                    }
                },
                \"glob\": {
                    \"version\": \"7.1.3\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"fs.realpath\": \"^1.0.0\",
                        \"inflight\": \"^1.0.4\",
                        \"inherits\": \"2\",
                        \"minimatch\": \"^3.0.4\",
                        \"once\": \"^1.3.0\",
                        \"path-is-absolute\": \"^1.0.0\"
                    }
                },
                \"has-unicode\": {
                    \"version\": \"2.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"iconv-lite\": {
                    \"version\": \"0.4.24\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"safer-buffer\": \">= 2.1.2 < 3\"
                    }
                },
                \"ignore-walk\": {
                    \"version\": \"3.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"minimatch\": \"^3.0.4\"
                    }
                },
                \"inflight\": {
                    \"version\": \"1.0.6\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"once\": \"^1.3.0\",
                        \"wrappy\": \"1\"
                    }
                },
                \"inherits\": {
                    \"version\": \"2.0.3\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"ini\": {
                    \"version\": \"1.3.5\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"is-fullwidth-code-point\": {
                    \"version\": \"1.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"number-is-nan\": \"^1.0.0\"
                    }
                },
                \"isarray\": {
                    \"version\": \"1.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"minimatch\": {
                    \"version\": \"3.0.4\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"brace-expansion\": \"^1.1.7\"
                    }
                },
                \"minimist\": {
                    \"version\": \"0.0.8\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"minipass\": {
                    \"version\": \"2.3.5\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"safe-buffer\": \"^5.1.2\",
                        \"yallist\": \"^3.0.0\"
                    }
                },
                \"minizlib\": {
                    \"version\": \"1.2.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"minipass\": \"^2.2.1\"
                    }
                },
                \"mkdirp\": {
                    \"version\": \"0.5.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"minimist\": \"0.0.8\"
                    }
                },
                \"ms\": {
                    \"version\": \"2.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"needle\": {
                    \"version\": \"2.3.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"debug\": \"^4.1.0\",
                        \"iconv-lite\": \"^0.4.4\",
                        \"sax\": \"^1.2.4\"
                    }
                },
                \"node-pre-gyp\": {
                    \"version\": \"0.12.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"detect-libc\": \"^1.0.2\",
                        \"mkdirp\": \"^0.5.1\",
                        \"needle\": \"^2.2.1\",
                        \"nopt\": \"^4.0.1\",
                        \"npm-packlist\": \"^1.1.6\",
                        \"npmlog\": \"^4.0.2\",
                        \"rc\": \"^1.2.7\",
                        \"rimraf\": \"^2.6.1\",
                        \"semver\": \"^5.3.0\",
                        \"tar\": \"^4\"
                    }
                },
                \"nopt\": {
                    \"version\": \"4.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"abbrev\": \"1\",
                        \"osenv\": \"^0.1.4\"
                    }
                },
                \"npm-bundled\": {
                    \"version\": \"1.0.6\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"npm-packlist\": {
                    \"version\": \"1.4.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"ignore-walk\": \"^3.0.1\",
                        \"npm-bundled\": \"^1.0.1\"
                    }
                },
                \"npmlog\": {
                    \"version\": \"4.1.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"are-we-there-yet\": \"~1.1.2\",
                        \"console-control-strings\": \"~1.1.0\",
                        \"gauge\": \"~2.7.3\",
                        \"set-blocking\": \"~2.0.0\"
                    }
                },
                \"number-is-nan\": {
                    \"version\": \"1.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"object-assign\": {
                    \"version\": \"4.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"once\": {
                    \"version\": \"1.4.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"wrappy\": \"1\"
                    }
                },
                \"os-homedir\": {
                    \"version\": \"1.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"os-tmpdir\": {
                    \"version\": \"1.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"osenv\": {
                    \"version\": \"0.1.5\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"os-homedir\": \"^1.0.0\",
                        \"os-tmpdir\": \"^1.0.0\"
                    }
                },
                \"path-is-absolute\": {
                    \"version\": \"1.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"process-nextick-args\": {
                    \"version\": \"2.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"rc\": {
                    \"version\": \"1.2.8\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"deep-extend\": \"^0.6.0\",
                        \"ini\": \"~1.3.0\",
                        \"minimist\": \"^1.2.0\",
                        \"strip-json-comments\": \"~2.0.1\"
                    },
                    \"dependencies\": {
                        \"minimist\": {
                            \"version\": \"1.2.0\",
                            \"bundled\": true,
                            \"dev\": true,
                            \"optional\": true
                        }
                    }
                },
                \"readable-stream\": {
                    \"version\": \"2.3.6\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"core-util-is\": \"~1.0.0\",
                        \"inherits\": \"~2.0.3\",
                        \"isarray\": \"~1.0.0\",
                        \"process-nextick-args\": \"~2.0.0\",
                        \"safe-buffer\": \"~5.1.1\",
                        \"string_decoder\": \"~1.1.1\",
                        \"util-deprecate\": \"~1.0.1\"
                    }
                },
                \"rimraf\": {
                    \"version\": \"2.6.3\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"glob\": \"^7.1.3\"
                    }
                },
                \"safe-buffer\": {
                    \"version\": \"5.1.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"safer-buffer\": {
                    \"version\": \"2.1.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"sax\": {
                    \"version\": \"1.2.4\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"semver\": {
                    \"version\": \"5.7.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"set-blocking\": {
                    \"version\": \"2.0.0\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"signal-exit\": {
                    \"version\": \"3.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"string-width\": {
                    \"version\": \"1.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"code-point-at\": \"^1.0.0\",
                        \"is-fullwidth-code-point\": \"^1.0.0\",
                        \"strip-ansi\": \"^3.0.0\"
                    }
                },
                \"string_decoder\": {
                    \"version\": \"1.1.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"safe-buffer\": \"~5.1.0\"
                    }
                },
                \"strip-ansi\": {
                    \"version\": \"3.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"ansi-regex\": \"^2.0.0\"
                    }
                },
                \"strip-json-comments\": {
                    \"version\": \"2.0.1\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"tar\": {
                    \"version\": \"4.4.8\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"chownr\": \"^1.1.1\",
                        \"fs-minipass\": \"^1.2.5\",
                        \"minipass\": \"^2.3.4\",
                        \"minizlib\": \"^1.1.1\",
                        \"mkdirp\": \"^0.5.0\",
                        \"safe-buffer\": \"^5.1.2\",
                        \"yallist\": \"^3.0.2\"
                    }
                },
                \"util-deprecate\": {
                    \"version\": \"1.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"wide-align\": {
                    \"version\": \"1.1.3\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"string-width\": \"^1.0.2 || 2\"
                    }
                },
                \"wrappy\": {
                    \"version\": \"1.0.2\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                },
                \"yallist\": {
                    \"version\": \"3.0.3\",
                    \"bundled\": true,
                    \"dev\": true,
                    \"optional\": true
                }
            }
        },
        \"function-bind\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/function-bind/-/function-bind-1.1.1.tgz\",
            \"integrity\": \"sha512-yIovAzMX49sF8Yl58fSCWJ5svSLuaibPxXQJFLmBObTuCr0Mf1KiPopGM9NiFjiYBCbfaa2Fh6breQ6ANVTI0A==\",
            \"dev\": true
        },
        \"get-caller-file\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/get-caller-file/-/get-caller-file-1.0.3.tgz\",
            \"integrity\": \"sha512-3t6rVToeoZfYSGd8YoLFR2DJkiQrIiUrGcjvFX2mDw3bn6k2OtwHN0TNCLbBO+w8qTvimhDkv+LSscbJY1vE6w==\",
            \"dev\": true
        },
        \"get-value\": {
            \"version\": \"2.0.6\",
            \"resolved\": \"https://registry.npmjs.org/get-value/-/get-value-2.0.6.tgz\",
            \"integrity\": \"sha1-3BXKHGcjh8p2vTesCjlbogQqLCg=\",
            \"dev\": true
        },
        \"glob\": {
            \"version\": \"7.1.3\",
            \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.1.3.tgz\",
            \"integrity\": \"sha512-vcfuiIxogLV4DlGBHIUOwI0IbrJ8HWPc4MU7HzviGeNho/UJDfi6B5p3sHeWIQ0KGIU0Jpxi5ZHxemQfLkkAwQ==\",
            \"dev\": true,
            \"requires\": {
                \"fs.realpath\": \"^1.0.0\",
                \"inflight\": \"^1.0.4\",
                \"inherits\": \"2\",
                \"minimatch\": \"^3.0.4\",
                \"once\": \"^1.3.0\",
                \"path-is-absolute\": \"^1.0.0\"
            }
        },
        \"glob-parent\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-3.1.0.tgz\",
            \"integrity\": \"sha1-nmr2KZ2NO9K9QEMIMr0RPfkGxa4=\",
            \"dev\": true,
            \"requires\": {
                \"is-glob\": \"^3.1.0\",
                \"path-dirname\": \"^1.0.0\"
            },
            \"dependencies\": {
                \"is-glob\": {
                    \"version\": \"3.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-3.1.0.tgz\",
                    \"integrity\": \"sha1-e6WuJCF4BKxwcHuWkiVnSGzD6Eo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extglob\": \"^2.1.0\"
                    }
                }
            }
        },
        \"glob-stream\": {
            \"version\": \"6.1.0\",
            \"resolved\": \"https://registry.npmjs.org/glob-stream/-/glob-stream-6.1.0.tgz\",
            \"integrity\": \"sha1-cEXJlBOz65SIjYOrRtC0BMx73eQ=\",
            \"dev\": true,
            \"requires\": {
                \"extend\": \"^3.0.0\",
                \"glob\": \"^7.1.1\",
                \"glob-parent\": \"^3.1.0\",
                \"is-negated-glob\": \"^1.0.0\",
                \"ordered-read-streams\": \"^1.0.0\",
                \"pumpify\": \"^1.3.5\",
                \"readable-stream\": \"^2.1.5\",
                \"remove-trailing-separator\": \"^1.0.1\",
                \"to-absolute-glob\": \"^2.0.0\",
                \"unique-stream\": \"^2.0.2\"
            }
        },
        \"glob-watcher\": {
            \"version\": \"5.0.3\",
            \"resolved\": \"https://registry.npmjs.org/glob-watcher/-/glob-watcher-5.0.3.tgz\",
            \"integrity\": \"sha512-8tWsULNEPHKQ2MR4zXuzSmqbdyV5PtwwCaWSGQ1WwHsJ07ilNeN1JB8ntxhckbnpSHaf9dXFUHzIWvm1I13dsg==\",
            \"dev\": true,
            \"requires\": {
                \"anymatch\": \"^2.0.0\",
                \"async-done\": \"^1.2.0\",
                \"chokidar\": \"^2.0.0\",
                \"is-negated-glob\": \"^1.0.0\",
                \"just-debounce\": \"^1.0.0\",
                \"object.defaults\": \"^1.1.0\"
            }
        },
        \"global-modules\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/global-modules/-/global-modules-1.0.0.tgz\",
            \"integrity\": \"sha512-sKzpEkf11GpOFuw0Zzjzmt4B4UZwjOcG757PPvrfhxcLFbq0wpsgpOqxpxtxFiCG4DtG93M6XRVbF2oGdev7bg==\",
            \"dev\": true,
            \"requires\": {
                \"global-prefix\": \"^1.0.1\",
                \"is-windows\": \"^1.0.1\",
                \"resolve-dir\": \"^1.0.0\"
            }
        },
        \"global-prefix\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/global-prefix/-/global-prefix-1.0.2.tgz\",
            \"integrity\": \"sha1-2/dDxsFJklk8ZVVoy2btMsASLr4=\",
            \"dev\": true,
            \"requires\": {
                \"expand-tilde\": \"^2.0.2\",
                \"homedir-polyfill\": \"^1.0.1\",
                \"ini\": \"^1.3.4\",
                \"is-windows\": \"^1.0.1\",
                \"which\": \"^1.2.14\"
            }
        },
        \"globby\": {
            \"version\": \"6.1.0\",
            \"resolved\": \"https://registry.npmjs.org/globby/-/globby-6.1.0.tgz\",
            \"integrity\": \"sha1-9abXDoOV4hyFj7BInWTfAkJNUGw=\",
            \"dev\": true,
            \"requires\": {
                \"array-union\": \"^1.0.1\",
                \"glob\": \"^7.0.3\",
                \"object-assign\": \"^4.0.1\",
                \"pify\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"glogg\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/glogg/-/glogg-1.0.2.tgz\",
            \"integrity\": \"sha512-5mwUoSuBk44Y4EshyiqcH95ZntbDdTQqA3QYSrxmzj28Ai0vXBGMH1ApSANH14j2sIRtqCEyg6PfsuP7ElOEDA==\",
            \"dev\": true,
            \"requires\": {
                \"sparkles\": \"^1.0.0\"
            }
        },
        \"graceful-fs\": {
            \"version\": \"4.1.15\",
            \"resolved\": \"https://registry.npmjs.org/graceful-fs/-/graceful-fs-4.1.15.tgz\",
            \"integrity\": \"sha512-6uHUhOPEBgQ24HM+r6b/QwWfZq+yiFcipKFrOFiBEnWdy5sdzYoi+pJeQaPI5qOLRFqWmAXUPQNsielzdLoecA==\",
            \"dev\": true
        },
        \"gulp\": {
            \"version\": \"4.0.2\",
            \"resolved\": \"https://registry.npmjs.org/gulp/-/gulp-4.0.2.tgz\",
            \"integrity\": \"sha512-dvEs27SCZt2ibF29xYgmnwwCYZxdxhQ/+LFWlbAW8y7jt68L/65402Lz3+CKy0Ov4rOs+NERmDq7YlZaDqUIfA==\",
            \"dev\": true,
            \"requires\": {
                \"glob-watcher\": \"^5.0.3\",
                \"gulp-cli\": \"^2.2.0\",
                \"undertaker\": \"^1.2.1\",
                \"vinyl-fs\": \"^3.0.0\"
            },
            \"dependencies\": {
                \"gulp-cli\": {
                    \"version\": \"2.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/gulp-cli/-/gulp-cli-2.2.0.tgz\",
                    \"integrity\": \"sha512-rGs3bVYHdyJpLqR0TUBnlcZ1O5O++Zs4bA0ajm+zr3WFCfiSLjGwoCBqFs18wzN+ZxahT9DkOK5nDf26iDsWjA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-colors\": \"^1.0.1\",
                        \"archy\": \"^1.0.0\",
                        \"array-sort\": \"^1.0.0\",
                        \"color-support\": \"^1.1.3\",
                        \"concat-stream\": \"^1.6.0\",
                        \"copy-props\": \"^2.0.1\",
                        \"fancy-log\": \"^1.3.2\",
                        \"gulplog\": \"^1.0.0\",
                        \"interpret\": \"^1.1.0\",
                        \"isobject\": \"^3.0.1\",
                        \"liftoff\": \"^3.1.0\",
                        \"matchdep\": \"^2.0.0\",
                        \"mute-stdout\": \"^1.0.0\",
                        \"pretty-hrtime\": \"^1.0.0\",
                        \"replace-homedir\": \"^1.0.0\",
                        \"semver-greatest-satisfied-range\": \"^1.1.0\",
                        \"v8flags\": \"^3.0.1\",
                        \"yargs\": \"^7.1.0\"
                    }
                },
                \"yargs\": {
                    \"version\": \"7.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-7.1.0.tgz\",
                    \"integrity\": \"sha1-a6MY6xaWFyf10oT46gA+jWFU0Mg=\",
                    \"dev\": true,
                    \"requires\": {
                        \"camelcase\": \"^3.0.0\",
                        \"cliui\": \"^3.2.0\",
                        \"decamelize\": \"^1.1.1\",
                        \"get-caller-file\": \"^1.0.1\",
                        \"os-locale\": \"^1.4.0\",
                        \"read-pkg-up\": \"^1.0.1\",
                        \"require-directory\": \"^2.1.1\",
                        \"require-main-filename\": \"^1.0.1\",
                        \"set-blocking\": \"^2.0.0\",
                        \"string-width\": \"^1.0.2\",
                        \"which-module\": \"^1.0.0\",
                        \"y18n\": \"^3.2.1\",
                        \"yargs-parser\": \"^5.0.0\"
                    }
                },
                \"yargs-parser\": {
                    \"version\": \"5.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-5.0.0.tgz\",
                    \"integrity\": \"sha1-J17PDX/+Bcd+ZOfIbkzZS/DhIoo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"camelcase\": \"^3.0.0\"
                    }
                }
            }
        },
        \"gulplog\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/gulplog/-/gulplog-1.0.0.tgz\",
            \"integrity\": \"sha1-4oxNRdBey77YGDY86PnFkmIp/+U=\",
            \"dev\": true,
            \"requires\": {
                \"glogg\": \"^1.0.0\"
            }
        },
        \"has-ansi\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-ansi/-/has-ansi-2.0.0.tgz\",
            \"integrity\": \"sha1-NPUEnOHs3ysGSa8+8k5F7TVBbZE=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-regex\": \"^2.0.0\"
            }
        },
        \"has-binary2\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/has-binary2/-/has-binary2-1.0.3.tgz\",
            \"integrity\": \"sha512-G1LWKhDSvhGeAQ8mPVQlqNcOB2sJdwATtZKl2pDKKHfpf/rYj24lkinxf69blJbnsvtqqNU+L3SL50vzZhXOnw==\",
            \"dev\": true,
            \"requires\": {
                \"isarray\": \"2.0.1\"
            }
        },
        \"has-cors\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/has-cors/-/has-cors-1.1.0.tgz\",
            \"integrity\": \"sha1-XkdHk/fqmEPRu5nCPu9J/xJv/zk=\",
            \"dev\": true
        },
        \"has-symbols\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.0.tgz\",
            \"integrity\": \"sha1-uhqPGvKg/DllD1yFA2dwQSIGO0Q=\",
            \"dev\": true
        },
        \"has-value\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-value/-/has-value-1.0.0.tgz\",
            \"integrity\": \"sha1-GLKB2lhbHFxR3vJMkw7SmgvmsXc=\",
            \"dev\": true,
            \"requires\": {
                \"get-value\": \"^2.0.6\",
                \"has-values\": \"^1.0.0\",
                \"isobject\": \"^3.0.0\"
            }
        },
        \"has-values\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-values/-/has-values-1.0.0.tgz\",
            \"integrity\": \"sha1-lbC2P+whRmGab+V/51Yo1aOe/k8=\",
            \"dev\": true,
            \"requires\": {
                \"is-number\": \"^3.0.0\",
                \"kind-of\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-4.0.0.tgz\",
                    \"integrity\": \"sha1-IIE989cSkosgc3hpGkUGb65y3Vc=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"homedir-polyfill\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/homedir-polyfill/-/homedir-polyfill-1.0.3.tgz\",
            \"integrity\": \"sha512-eSmmWE5bZTK2Nou4g0AI3zZ9rswp7GRKoKXS1BLUkvPviOqs4YTN1djQIqrXy9k5gEtdLPy86JjRwsNM9tnDcA==\",
            \"dev\": true,
            \"requires\": {
                \"parse-passwd\": \"^1.0.0\"
            }
        },
        \"hosted-git-info\": {
            \"version\": \"2.7.1\",
            \"resolved\": \"https://registry.npmjs.org/hosted-git-info/-/hosted-git-info-2.7.1.tgz\",
            \"integrity\": \"sha512-7T/BxH19zbcCTa8XkMlbK5lTo1WtgkFi3GvdWEyNuc4Vex7/9Dqbnpsf4JMydcfj9HCg4zUWFTL3Za6lapg5/w==\",
            \"dev\": true
        },
        \"http-errors\": {
            \"version\": \"1.7.2\",
            \"resolved\": \"https://registry.npmjs.org/http-errors/-/http-errors-1.7.2.tgz\",
            \"integrity\": \"sha512-uUQBt3H/cSIVfch6i1EuPNy/YsRSOUBXTVfZ+yR7Zjez3qjBz6i9+i4zjNaoqcoFVI4lQJ5plg63TvGfRSDCRg==\",
            \"dev\": true,
            \"requires\": {
                \"depd\": \"~1.1.2\",
                \"inherits\": \"2.0.3\",
                \"setprototypeof\": \"1.1.1\",
                \"statuses\": \">= 1.5.0 < 2\",
                \"toidentifier\": \"1.0.0\"
            },
            \"dependencies\": {
                \"statuses\": {
                    \"version\": \"1.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.5.0.tgz\",
                    \"integrity\": \"sha1-Fhx9rBd2Wf2YEfQ3cfqZOBR4Yow=\",
                    \"dev\": true
                }
            }
        },
        \"http-proxy\": {
            \"version\": \"1.15.2\",
            \"resolved\": \"https://registry.npmjs.org/http-proxy/-/http-proxy-1.15.2.tgz\",
            \"integrity\": \"sha1-ZC/cr/5S00SNK9o7AHnpQJBk2jE=\",
            \"dev\": true,
            \"requires\": {
                \"eventemitter3\": \"1.x.x\",
                \"requires-port\": \"1.x.x\"
            }
        },
        \"iconv-lite\": {
            \"version\": \"0.4.24\",
            \"resolved\": \"https://registry.npmjs.org/iconv-lite/-/iconv-lite-0.4.24.tgz\",
            \"integrity\": \"sha512-v3MXnZAcvnywkTUEZomIActle7RXXeedOR31wwl7VlyoXO4Qi9arvSenNQWne1TcRwhCL1HwLI21bEqdpj8/rA==\",
            \"dev\": true,
            \"requires\": {
                \"safer-buffer\": \">= 2.1.2 < 3\"
            }
        },
        \"immutable\": {
            \"version\": \"3.8.2\",
            \"resolved\": \"https://registry.npmjs.org/immutable/-/immutable-3.8.2.tgz\",
            \"integrity\": \"sha1-wkOZUUVbs5kT2vKBN28VMOEErfM=\",
            \"dev\": true
        },
        \"indexof\": {
            \"version\": \"0.0.1\",
            \"resolved\": \"https://registry.npmjs.org/indexof/-/indexof-0.0.1.tgz\",
            \"integrity\": \"sha1-gtwzbSMrkGIXnQWrMpOmYFn9Q10=\",
            \"dev\": true
        },
        \"inflight\": {
            \"version\": \"1.0.6\",
            \"resolved\": \"https://registry.npmjs.org/inflight/-/inflight-1.0.6.tgz\",
            \"integrity\": \"sha1-Sb1jMdfQLQwJvJEKEHW6gWW1bfk=\",
            \"dev\": true,
            \"requires\": {
                \"once\": \"^1.3.0\",
                \"wrappy\": \"1\"
            }
        },
        \"inherits\": {
            \"version\": \"2.0.3\",
            \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.3.tgz\",
            \"integrity\": \"sha1-Yzwsg+PaQqUC9SRmAiSA9CCCYd4=\",
            \"dev\": true
        },
        \"ini\": {
            \"version\": \"1.3.5\",
            \"resolved\": \"https://registry.npmjs.org/ini/-/ini-1.3.5.tgz\",
            \"integrity\": \"sha512-RZY5huIKCMRWDUqZlEi72f/lmXKMvuszcMBduliQ3nnWbx9X/ZBQO7DijMEYS9EhHBb2qacRUMtC7svLwe0lcw==\",
            \"dev\": true
        },
        \"interpret\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/interpret/-/interpret-1.2.0.tgz\",
            \"integrity\": \"sha512-mT34yGKMNceBQUoVn7iCDKDntA7SC6gycMAWzGx1z/CMCTV7b2AAtXlo3nRyHZ1FelRkQbQjprHSYGwzLtkVbw==\",
            \"dev\": true
        },
        \"invert-kv\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/invert-kv/-/invert-kv-1.0.0.tgz\",
            \"integrity\": \"sha1-EEqOSqym09jNFXqO+L+rLXo//bY=\",
            \"dev\": true
        },
        \"is-absolute\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-absolute/-/is-absolute-1.0.0.tgz\",
            \"integrity\": \"sha512-dOWoqflvcydARa360Gvv18DZ/gRuHKi2NU/wU5X1ZFzdYfH29nkiNZsF3mp4OJ3H4yo9Mx8A/uAGNzpzPN3yBA==\",
            \"dev\": true,
            \"requires\": {
                \"is-relative\": \"^1.0.0\",
                \"is-windows\": \"^1.0.1\"
            }
        },
        \"is-accessor-descriptor\": {
            \"version\": \"0.1.6\",
            \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-0.1.6.tgz\",
            \"integrity\": \"sha1-qeEss66Nh2cn7u84Q/igiXtcmNY=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"is-arrayish\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/is-arrayish/-/is-arrayish-0.2.1.tgz\",
            \"integrity\": \"sha1-d8mYQFJ6qOyxqLppe4BkWnqSap0=\",
            \"dev\": true
        },
        \"is-binary-path\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/is-binary-path/-/is-binary-path-1.0.1.tgz\",
            \"integrity\": \"sha1-dfFmQrSA8YenEcgUFh/TpKdlWJg=\",
            \"dev\": true,
            \"requires\": {
                \"binary-extensions\": \"^1.0.0\"
            }
        },
        \"is-buffer\": {
            \"version\": \"1.1.6\",
            \"resolved\": \"https://registry.npmjs.org/is-buffer/-/is-buffer-1.1.6.tgz\",
            \"integrity\": \"sha512-NcdALwpXkTm5Zvvbk7owOUSvVvBKDgKP5/ewfXEznmQFfs4ZRmanOeKBTjRVjka3QFoN6XJ+9F3USqfHqTaU5w==\",
            \"dev\": true
        },
        \"is-data-descriptor\": {
            \"version\": \"0.1.4\",
            \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-0.1.4.tgz\",
            \"integrity\": \"sha1-C17mSDiOLIYCgueT8YVv7D8wG1Y=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"is-descriptor\": {
            \"version\": \"0.1.6\",
            \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-0.1.6.tgz\",
            \"integrity\": \"sha512-avDYr0SB3DwO9zsMov0gKCESFYqCnE4hq/4z3TdUlukEy5t9C0YRq7HLrsN52NAcqXKaepeCD0n+B0arnVG3Hg==\",
            \"dev\": true,
            \"requires\": {
                \"is-accessor-descriptor\": \"^0.1.6\",
                \"is-data-descriptor\": \"^0.1.4\",
                \"kind-of\": \"^5.0.0\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
                    \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
                    \"dev\": true
                }
            }
        },
        \"is-extendable\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
            \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
            \"dev\": true
        },
        \"is-extglob\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/is-extglob/-/is-extglob-2.1.1.tgz\",
            \"integrity\": \"sha1-qIwCU1eR8C7TfHahueqXc8gz+MI=\",
            \"dev\": true
        },
        \"is-fullwidth-code-point\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-1.0.0.tgz\",
            \"integrity\": \"sha1-754xOG8DGn8NZDr4L95QxFfvAMs=\",
            \"dev\": true,
            \"requires\": {
                \"number-is-nan\": \"^1.0.0\"
            }
        },
        \"is-glob\": {
            \"version\": \"4.0.1\",
            \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-4.0.1.tgz\",
            \"integrity\": \"sha512-5G0tKtBTFImOqDnLB2hG6Bp2qcKEFduo4tZu9MT/H6NQv/ghhy30o55ufafxJ/LdH79LLs2Kfrn85TLKyA7BUg==\",
            \"dev\": true,
            \"requires\": {
                \"is-extglob\": \"^2.1.1\"
            }
        },
        \"is-negated-glob\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-negated-glob/-/is-negated-glob-1.0.0.tgz\",
            \"integrity\": \"sha1-aRC8pdqMleeEtXUbl2z1oQ/uNtI=\",
            \"dev\": true
        },
        \"is-number\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-3.0.0.tgz\",
            \"integrity\": \"sha1-JP1iAaR4LPUFYcgQJ2r8fRLXEZU=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"is-number-like\": {
            \"version\": \"1.0.8\",
            \"resolved\": \"https://registry.npmjs.org/is-number-like/-/is-number-like-1.0.8.tgz\",
            \"integrity\": \"sha512-6rZi3ezCyFcn5L71ywzz2bS5b2Igl1En3eTlZlvKjpz1n3IZLAYMbKYAIQgFmEu0GENg92ziU/faEOA/aixjbA==\",
            \"dev\": true,
            \"requires\": {
                \"lodash.isfinite\": \"^3.3.2\"
            }
        },
        \"is-path-cwd\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/is-path-cwd/-/is-path-cwd-2.1.0.tgz\",
            \"integrity\": \"sha512-Sc5j3/YnM8tDeyCsVeKlm/0p95075DyLmDEIkSgQ7mXkrOX+uTCtmQFm0CYzVyJwcCCmO3k8qfJt17SxQwB5Zw==\",
            \"dev\": true
        },
        \"is-path-in-cwd\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/is-path-in-cwd/-/is-path-in-cwd-2.1.0.tgz\",
            \"integrity\": \"sha512-rNocXHgipO+rvnP6dk3zI20RpOtrAM/kzbB258Uw5BWr3TpXi861yzjo16Dn4hUox07iw5AyeMLHWsujkjzvRQ==\",
            \"dev\": true,
            \"requires\": {
                \"is-path-inside\": \"^2.1.0\"
            }
        },
        \"is-path-inside\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/is-path-inside/-/is-path-inside-2.1.0.tgz\",
            \"integrity\": \"sha512-wiyhTzfDWsvwAW53OBWF5zuvaOGlZ6PwYxAbPVDhpm+gM09xKQGjBq/8uYN12aDvMxnAnq3dxTyoSoRNmg5YFg==\",
            \"dev\": true,
            \"requires\": {
                \"path-is-inside\": \"^1.0.2\"
            }
        },
        \"is-plain-object\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/is-plain-object/-/is-plain-object-2.0.4.tgz\",
            \"integrity\": \"sha512-h5PpgXkWitc38BBMYawTYMWJHFZJVnBquFE57xFpjB8pJFiF6gZ+bU+WyI/yqXiFR5mdLsgYNaPe8uao6Uv9Og==\",
            \"dev\": true,
            \"requires\": {
                \"isobject\": \"^3.0.1\"
            }
        },
        \"is-relative\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-relative/-/is-relative-1.0.0.tgz\",
            \"integrity\": \"sha512-Kw/ReK0iqwKeu0MITLFuj0jbPAmEiOsIwyIXvvbfa6QfmN9pkD1M+8pdk7Rl/dTKbH34/XBFMbgD4iMJhLQbGA==\",
            \"dev\": true,
            \"requires\": {
                \"is-unc-path\": \"^1.0.0\"
            }
        },
        \"is-unc-path\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-unc-path/-/is-unc-path-1.0.0.tgz\",
            \"integrity\": \"sha512-mrGpVd0fs7WWLfVsStvgF6iEJnbjDFZh9/emhRDcGWTduTfNHd9CHeUwH3gYIjdbwo4On6hunkztwOaAw0yllQ==\",
            \"dev\": true,
            \"requires\": {
                \"unc-path-regex\": \"^0.1.2\"
            }
        },
        \"is-utf8\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/is-utf8/-/is-utf8-0.2.1.tgz\",
            \"integrity\": \"sha1-Sw2hRCEE0bM2NA6AeX6GXPOffXI=\",
            \"dev\": true
        },
        \"is-valid-glob\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-valid-glob/-/is-valid-glob-1.0.0.tgz\",
            \"integrity\": \"sha1-Kb8+/3Ab4tTTFdusw5vDn+j2Aao=\",
            \"dev\": true
        },
        \"is-windows\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/is-windows/-/is-windows-1.0.2.tgz\",
            \"integrity\": \"sha512-eXK1UInq2bPmjyX6e3VHIzMLobc4J94i4AWn+Hpq3OU5KkrRC96OAcR3PRJ/pGu6m8TRnBHP9dkXQVsT/COVIA==\",
            \"dev\": true
        },
        \"is-wsl\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/is-wsl/-/is-wsl-1.1.0.tgz\",
            \"integrity\": \"sha1-HxbkqiKwTRM2tmGIpmrzxgDDpm0=\",
            \"dev\": true
        },
        \"isarray\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-2.0.1.tgz\",
            \"integrity\": \"sha1-o32U7ZzaLVmGXJ92/llu4fM4dB4=\",
            \"dev\": true
        },
        \"isexe\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/isexe/-/isexe-2.0.0.tgz\",
            \"integrity\": \"sha1-6PvzdNxVb/iUehDcsFctYz8s+hA=\",
            \"dev\": true
        },
        \"isobject\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/isobject/-/isobject-3.0.1.tgz\",
            \"integrity\": \"sha1-TkMekrEalzFjaqH5yNHMvP2reN8=\",
            \"dev\": true
        },
        \"jquery\": {
            \"version\": \"3.4.1\",
            \"resolved\": \"https://registry.npmjs.org/jquery/-/jquery-3.4.1.tgz\",
            \"integrity\": \"sha512-36+AdBzCL+y6qjw5Tx7HgzeGCzC81MDDgaUP8ld2zhx58HdqXGoBd+tHdrBMiyjGQs0Hxs/MLZTu/eHNJJuWPw==\"
        },
        \"json-stable-stringify-without-jsonify\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/json-stable-stringify-without-jsonify/-/json-stable-stringify-without-jsonify-1.0.1.tgz\",
            \"integrity\": \"sha1-nbe1lJatPzz+8wp1FC0tkwrXJlE=\",
            \"dev\": true
        },
        \"jsonfile\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/jsonfile/-/jsonfile-3.0.1.tgz\",
            \"integrity\": \"sha1-pezG9l9T9mLEQVx2daAzHQmS7GY=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.6\"
            }
        },
        \"just-debounce\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/just-debounce/-/just-debounce-1.0.0.tgz\",
            \"integrity\": \"sha1-h/zPrv/AtozRnVX2cilD+SnqNeo=\",
            \"dev\": true
        },
        \"kind-of\": {
            \"version\": \"6.0.2\",
            \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-6.0.2.tgz\",
            \"integrity\": \"sha512-s5kLOcnH0XqDO+FvuaLX8DDjZ18CGFk7VygH40QoKPUQhW4e2rvM0rwUq0t8IQDOwYSeLK01U90OjzBTme2QqA==\",
            \"dev\": true
        },
        \"last-run\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/last-run/-/last-run-1.1.1.tgz\",
            \"integrity\": \"sha1-RblpQsF7HHnHchmCWbqUO+v4yls=\",
            \"dev\": true,
            \"requires\": {
                \"default-resolution\": \"^2.0.0\",
                \"es6-weak-map\": \"^2.0.1\"
            }
        },
        \"lazystream\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lazystream/-/lazystream-1.0.0.tgz\",
            \"integrity\": \"sha1-9plf4PggOS9hOWvolGJAe7dxaOQ=\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"^2.0.5\"
            }
        },
        \"lcid\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lcid/-/lcid-1.0.0.tgz\",
            \"integrity\": \"sha1-MIrMr6C8SDo4Z7S28rlQYlHRuDU=\",
            \"dev\": true,
            \"requires\": {
                \"invert-kv\": \"^1.0.0\"
            }
        },
        \"lead\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lead/-/lead-1.0.0.tgz\",
            \"integrity\": \"sha1-bxT5mje+Op3XhPVJVpDlkDRm7kI=\",
            \"dev\": true,
            \"requires\": {
                \"flush-write-stream\": \"^1.0.2\"
            }
        },
        \"liftoff\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/liftoff/-/liftoff-3.1.0.tgz\",
            \"integrity\": \"sha512-DlIPlJUkCV0Ips2zf2pJP0unEoT1kwYhiiPUGF3s/jtxTCjziNLoiVVh+jqWOWeFi6mmwQ5fNxvAUyPad4Dfog==\",
            \"dev\": true,
            \"requires\": {
                \"extend\": \"^3.0.0\",
                \"findup-sync\": \"^3.0.0\",
                \"fined\": \"^1.0.1\",
                \"flagged-respawn\": \"^1.0.0\",
                \"is-plain-object\": \"^2.0.4\",
                \"object.map\": \"^1.0.0\",
                \"rechoir\": \"^0.6.2\",
                \"resolve\": \"^1.1.7\"
            }
        },
        \"limiter\": {
            \"version\": \"1.1.4\",
            \"resolved\": \"https://registry.npmjs.org/limiter/-/limiter-1.1.4.tgz\",
            \"integrity\": \"sha512-XCpr5bElgDI65vVgstP8TWjv6/QKWm9GU5UG0Pr5sLQ3QLo8NVKsioe+Jed5/3vFOe3IQuqE7DKwTvKQkjTHvg==\",
            \"dev\": true
        },
        \"load-json-file\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/load-json-file/-/load-json-file-1.1.0.tgz\",
            \"integrity\": \"sha1-lWkFcI1YtLq0wiYbBPWfMcmTdMA=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"parse-json\": \"^2.2.0\",
                \"pify\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\",
                \"strip-bom\": \"^2.0.0\"
            }
        },
        \"localtunnel\": {
            \"version\": \"1.9.2\",
            \"resolved\": \"https://registry.npmjs.org/localtunnel/-/localtunnel-1.9.2.tgz\",
            \"integrity\": \"sha512-NEKF7bDJE9U3xzJu3kbayF0WTvng6Pww7tzqNb/XtEARYwqw7CKEX7BvOMg98FtE9es2CRizl61gkV3hS8dqYg==\",
            \"dev\": true,
            \"requires\": {
                \"axios\": \"0.19.0\",
                \"debug\": \"4.1.1\",
                \"openurl\": \"1.1.1\",
                \"yargs\": \"6.6.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"4.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.1.1.tgz\",
                    \"integrity\": \"sha512-pYAIzeRo8J6KPEaJ0VWOh5Pzkbw/RetuzehGM7QRRX5he4fPHx2rdKMB256ehJCkX+XRQm16eZLqLNS8RSZXZw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"^2.1.1\"
                    }
                },
                \"ms\": {
                    \"version\": \"2.1.2\",
                    \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
                    \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
                    \"dev\": true
                },
                \"yargs\": {
                    \"version\": \"6.6.0\",
                    \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-6.6.0.tgz\",
                    \"integrity\": \"sha1-eC7CHvQDNF+DCoCMo9UTr1YGUgg=\",
                    \"dev\": true,
                    \"requires\": {
                        \"camelcase\": \"^3.0.0\",
                        \"cliui\": \"^3.2.0\",
                        \"decamelize\": \"^1.1.1\",
                        \"get-caller-file\": \"^1.0.1\",
                        \"os-locale\": \"^1.4.0\",
                        \"read-pkg-up\": \"^1.0.1\",
                        \"require-directory\": \"^2.1.1\",
                        \"require-main-filename\": \"^1.0.1\",
                        \"set-blocking\": \"^2.0.0\",
                        \"string-width\": \"^1.0.2\",
                        \"which-module\": \"^1.0.0\",
                        \"y18n\": \"^3.2.1\",
                        \"yargs-parser\": \"^4.2.0\"
                    }
                }
            }
        },
        \"lodash\": {
            \"version\": \"4.17.11\",
            \"resolved\": \"https://registry.npmjs.org/lodash/-/lodash-4.17.11.tgz\",
            \"integrity\": \"sha512-cQKh8igo5QUhZ7lg38DYWAxMvjSAKG0A8wGSVimP07SIUEK2UO+arSRKbRZWtelMtN5V0Hkwh5ryOto/SshYIg==\",
            \"dev\": true
        },
        \"lodash.isfinite\": {
            \"version\": \"3.3.2\",
            \"resolved\": \"https://registry.npmjs.org/lodash.isfinite/-/lodash.isfinite-3.3.2.tgz\",
            \"integrity\": \"sha1-+4m2WpqAKBgz8LdHizpRBPiY67M=\",
            \"dev\": true
        },
        \"make-iterator\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/make-iterator/-/make-iterator-1.0.1.tgz\",
            \"integrity\": \"sha512-pxiuXh0iVEq7VM7KMIhs5gxsfxCux2URptUQaXo4iZZJxBAzTPOLE2BumO5dbfVYq/hBJFBR/a1mFDmOx5AGmw==\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^6.0.2\"
            }
        },
        \"map-cache\": {
            \"version\": \"0.2.2\",
            \"resolved\": \"https://registry.npmjs.org/map-cache/-/map-cache-0.2.2.tgz\",
            \"integrity\": \"sha1-wyq9C9ZSXZsFFkW7TyasXcmKDb8=\",
            \"dev\": true
        },
        \"map-visit\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/map-visit/-/map-visit-1.0.0.tgz\",
            \"integrity\": \"sha1-7Nyo8TFE5mDxtb1B8S80edmN+48=\",
            \"dev\": true,
            \"requires\": {
                \"object-visit\": \"^1.0.0\"
            }
        },
        \"matchdep\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/matchdep/-/matchdep-2.0.0.tgz\",
            \"integrity\": \"sha1-xvNINKDY28OzfCfui7yyfHd1WC4=\",
            \"dev\": true,
            \"requires\": {
                \"findup-sync\": \"^2.0.0\",
                \"micromatch\": \"^3.0.4\",
                \"resolve\": \"^1.4.0\",
                \"stack-trace\": \"0.0.10\"
            },
            \"dependencies\": {
                \"findup-sync\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/findup-sync/-/findup-sync-2.0.0.tgz\",
                    \"integrity\": \"sha1-kyaxSIwi0aYIhlCoaQGy2akKLLw=\",
                    \"dev\": true,
                    \"requires\": {
                        \"detect-file\": \"^1.0.0\",
                        \"is-glob\": \"^3.1.0\",
                        \"micromatch\": \"^3.0.4\",
                        \"resolve-dir\": \"^1.0.1\"
                    }
                },
                \"is-glob\": {
                    \"version\": \"3.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-3.1.0.tgz\",
                    \"integrity\": \"sha1-e6WuJCF4BKxwcHuWkiVnSGzD6Eo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extglob\": \"^2.1.0\"
                    }
                }
            }
        },
        \"merge-stream\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/merge-stream/-/merge-stream-2.0.0.tgz\",
            \"integrity\": \"sha512-abv/qOcuPfk3URPfDzmZU1LKmuw8kT+0nIHvKrKgFrwifol/doWcdA4ZqsWQ8ENrFKkd67Mfpo/LovbIUsbt3w==\",
            \"dev\": true
        },
        \"micromatch\": {
            \"version\": \"3.1.10\",
            \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-3.1.10.tgz\",
            \"integrity\": \"sha512-MWikgl9n9M3w+bpsY3He8L+w9eF9338xRl8IAO5viDizwSzziFEyUzo2xrrloB64ADbTf8uA8vRqqttDTOmccg==\",
            \"dev\": true,
            \"requires\": {
                \"arr-diff\": \"^4.0.0\",
                \"array-unique\": \"^0.3.2\",
                \"braces\": \"^2.3.1\",
                \"define-property\": \"^2.0.2\",
                \"extend-shallow\": \"^3.0.2\",
                \"extglob\": \"^2.0.4\",
                \"fragment-cache\": \"^0.2.1\",
                \"kind-of\": \"^6.0.2\",
                \"nanomatch\": \"^1.2.9\",
                \"object.pick\": \"^1.3.0\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.2\"
            }
        },
        \"mime\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/mime/-/mime-1.4.1.tgz\",
            \"integrity\": \"sha512-KI1+qOZu5DcW6wayYHSzR/tXKCDC5Om4s1z2QJjDULzLcmf3DvzS7oluY4HCTrc+9FiKmWUgeNLg7W3uIQvxtQ==\",
            \"dev\": true
        },
        \"mime-db\": {
            \"version\": \"1.40.0\",
            \"resolved\": \"https://registry.npmjs.org/mime-db/-/mime-db-1.40.0.tgz\",
            \"integrity\": \"sha512-jYdeOMPy9vnxEqFRRo6ZvTZ8d9oPb+k18PKoYNYUe2stVEBPPwsln/qWzdbmaIvnhZ9v2P+CuecK+fpUfsV2mA==\",
            \"dev\": true
        },
        \"mime-types\": {
            \"version\": \"2.1.24\",
            \"resolved\": \"https://registry.npmjs.org/mime-types/-/mime-types-2.1.24.tgz\",
            \"integrity\": \"sha512-WaFHS3MCl5fapm3oLxU4eYDw77IQM2ACcxQ9RIxfaC3ooc6PFuBMGZZsYpvoXS5D5QTWPieo1jjLdAm3TBP3cQ==\",
            \"dev\": true,
            \"requires\": {
                \"mime-db\": \"1.40.0\"
            }
        },
        \"minimatch\": {
            \"version\": \"3.0.4\",
            \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.0.4.tgz\",
            \"integrity\": \"sha512-yJHVQEhyqPLUTgt9B83PXu6W3rx4MvvHvSUvToogpwoGDOUQ+yDrR0HRot+yOCdCO7u4hX3pWft6kWBBcqh0UA==\",
            \"dev\": true,
            \"requires\": {
                \"brace-expansion\": \"^1.1.7\"
            }
        },
        \"mitt\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/mitt/-/mitt-1.1.3.tgz\",
            \"integrity\": \"sha512-mUDCnVNsAi+eD6qA0HkRkwYczbLHJ49z17BGe2PYRhZL4wpZUFZGJHU7/5tmvohoma+Hdn0Vh/oJTiPEmgSruA==\",
            \"dev\": true
        },
        \"mixin-deep\": {
            \"version\": \"1.3.1\",
            \"resolved\": \"https://registry.npmjs.org/mixin-deep/-/mixin-deep-1.3.1.tgz\",
            \"integrity\": \"sha512-8ZItLHeEgaqEvd5lYBXfm4EZSFCX29Jb9K+lAHhDKzReKBQKj3R+7NOF6tjqYi9t4oI8VUfaWITJQm86wnXGNQ==\",
            \"dev\": true,
            \"requires\": {
                \"for-in\": \"^1.0.2\",
                \"is-extendable\": \"^1.0.1\"
            },
            \"dependencies\": {
                \"is-extendable\": {
                    \"version\": \"1.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
                    \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-plain-object\": \"^2.0.4\"
                    }
                }
            }
        },
        \"ms\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
            \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
            \"dev\": true
        },
        \"mute-stdout\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/mute-stdout/-/mute-stdout-1.0.1.tgz\",
            \"integrity\": \"sha512-kDcwXR4PS7caBpuRYYBUz9iVixUk3anO3f5OYFiIPwK/20vCzKCHyKoulbiDY1S53zD2bxUpxN/IJ+TnXjfvxg==\",
            \"dev\": true
        },
        \"nan\": {
            \"version\": \"2.13.2\",
            \"resolved\": \"https://registry.npmjs.org/nan/-/nan-2.13.2.tgz\",
            \"integrity\": \"sha512-TghvYc72wlMGMVMluVo9WRJc0mB8KxxF/gZ4YYFy7V2ZQX9l7rgbPg7vjS9mt6U5HXODVFVI2bOduCzwOMv/lw==\",
            \"dev\": true,
            \"optional\": true
        },
        \"nanomatch\": {
            \"version\": \"1.2.13\",
            \"resolved\": \"https://registry.npmjs.org/nanomatch/-/nanomatch-1.2.13.tgz\",
            \"integrity\": \"sha512-fpoe2T0RbHwBTBUOftAfBPaDEi06ufaUai0mE6Yn1kacc3SnTErfb/h+X94VXzI64rKFHYImXSvdwGGCmwOqCA==\",
            \"dev\": true,
            \"requires\": {
                \"arr-diff\": \"^4.0.0\",
                \"array-unique\": \"^0.3.2\",
                \"define-property\": \"^2.0.2\",
                \"extend-shallow\": \"^3.0.2\",
                \"fragment-cache\": \"^0.2.1\",
                \"is-windows\": \"^1.0.2\",
                \"kind-of\": \"^6.0.2\",
                \"object.pick\": \"^1.3.0\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.1\"
            }
        },
        \"negotiator\": {
            \"version\": \"0.6.2\",
            \"resolved\": \"https://registry.npmjs.org/negotiator/-/negotiator-0.6.2.tgz\",
            \"integrity\": \"sha512-hZXc7K2e+PgeI1eDBe/10Ard4ekbfrrqG8Ep+8Jmf4JID2bNg7NvCPOZN+kfF574pFQI7mum2AUqDidoKqcTOw==\",
            \"dev\": true
        },
        \"next-tick\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/next-tick/-/next-tick-1.0.0.tgz\",
            \"integrity\": \"sha1-yobR/ogoFpsBICCOPchCS524NCw=\",
            \"dev\": true
        },
        \"normalize-package-data\": {
            \"version\": \"2.5.0\",
            \"resolved\": \"https://registry.npmjs.org/normalize-package-data/-/normalize-package-data-2.5.0.tgz\",
            \"integrity\": \"sha512-/5CMN3T0R4XTj4DcGaexo+roZSdSFW/0AOOTROrjxzCG1wrWXEsGbRKevjlIL+ZDE4sZlJr5ED4YW0yqmkK+eA==\",
            \"dev\": true,
            \"requires\": {
                \"hosted-git-info\": \"^2.1.4\",
                \"resolve\": \"^1.10.0\",
                \"semver\": \"2 || 3 || 4 || 5\",
                \"validate-npm-package-license\": \"^3.0.1\"
            }
        },
        \"normalize-path\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-3.0.0.tgz\",
            \"integrity\": \"sha512-6eZs5Ls3WtCisHWp9S2GUy8dqkpGi4BVSz3GaqiE6ezub0512ESztXUwUB6C6IKbQkY2Pnb/mD4WYojCRwcwLA==\",
            \"dev\": true
        },
        \"now-and-later\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/now-and-later/-/now-and-later-2.0.1.tgz\",
            \"integrity\": \"sha512-KGvQ0cB70AQfg107Xvs/Fbu+dGmZoTRJp2TaPwcwQm3/7PteUyN2BCgk8KBMPGBUXZdVwyWS8fDCGFygBm19UQ==\",
            \"dev\": true,
            \"requires\": {
                \"once\": \"^1.3.2\"
            }
        },
        \"number-is-nan\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/number-is-nan/-/number-is-nan-1.0.1.tgz\",
            \"integrity\": \"sha1-CXtgK1NCKlIsGvuHkDGDNpQaAR0=\",
            \"dev\": true
        },
        \"object-assign\": {
            \"version\": \"4.1.1\",
            \"resolved\": \"https://registry.npmjs.org/object-assign/-/object-assign-4.1.1.tgz\",
            \"integrity\": \"sha1-IQmtx5ZYh8/AXLvUQsrIv7s2CGM=\",
            \"dev\": true
        },
        \"object-component\": {
            \"version\": \"0.0.3\",
            \"resolved\": \"https://registry.npmjs.org/object-component/-/object-component-0.0.3.tgz\",
            \"integrity\": \"sha1-8MaapQ78lbhmwYb0AKM3acsvEpE=\",
            \"dev\": true
        },
        \"object-copy\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/object-copy/-/object-copy-0.1.0.tgz\",
            \"integrity\": \"sha1-fn2Fi3gb18mRpBupde04EnVOmYw=\",
            \"dev\": true,
            \"requires\": {
                \"copy-descriptor\": \"^0.1.0\",
                \"define-property\": \"^0.2.5\",
                \"kind-of\": \"^3.0.3\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                },
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"object-keys\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/object-keys/-/object-keys-1.1.1.tgz\",
            \"integrity\": \"sha512-NuAESUOUMrlIXOfHKzD6bpPu3tYt3xvjNdRIQ+FeT0lNb4K8WR70CaDxhuNguS2XG+GjkyMwOzsN5ZktImfhLA==\",
            \"dev\": true
        },
        \"object-path\": {
            \"version\": \"0.9.2\",
            \"resolved\": \"https://registry.npmjs.org/object-path/-/object-path-0.9.2.tgz\",
            \"integrity\": \"sha1-D9mnT8X60a45aLWGvaXGMr1sBaU=\",
            \"dev\": true
        },
        \"object-visit\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/object-visit/-/object-visit-1.0.1.tgz\",
            \"integrity\": \"sha1-95xEk68MU3e1n+OdOV5BBC3QRbs=\",
            \"dev\": true,
            \"requires\": {
                \"isobject\": \"^3.0.0\"
            }
        },
        \"object.assign\": {
            \"version\": \"4.1.0\",
            \"resolved\": \"https://registry.npmjs.org/object.assign/-/object.assign-4.1.0.tgz\",
            \"integrity\": \"sha512-exHJeq6kBKj58mqGyTQ9DFvrZC/eR6OwxzoM9YRoGBqrXYonaFyGiFMuc9VZrXf7DarreEwMpurG3dd+CNyW5w==\",
            \"dev\": true,
            \"requires\": {
                \"define-properties\": \"^1.1.2\",
                \"function-bind\": \"^1.1.1\",
                \"has-symbols\": \"^1.0.0\",
                \"object-keys\": \"^1.0.11\"
            }
        },
        \"object.defaults\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/object.defaults/-/object.defaults-1.1.0.tgz\",
            \"integrity\": \"sha1-On+GgzS0B96gbaFtiNXNKeQ1/s8=\",
            \"dev\": true,
            \"requires\": {
                \"array-each\": \"^1.0.1\",
                \"array-slice\": \"^1.0.0\",
                \"for-own\": \"^1.0.0\",
                \"isobject\": \"^3.0.0\"
            }
        },
        \"object.map\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/object.map/-/object.map-1.0.1.tgz\",
            \"integrity\": \"sha1-z4Plncj8wK1fQlDh94s7gb2AHTc=\",
            \"dev\": true,
            \"requires\": {
                \"for-own\": \"^1.0.0\",
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"object.pick\": {
            \"version\": \"1.3.0\",
            \"resolved\": \"https://registry.npmjs.org/object.pick/-/object.pick-1.3.0.tgz\",
            \"integrity\": \"sha1-h6EKxMFpS9Lhy/U1kaZhQftd10c=\",
            \"dev\": true,
            \"requires\": {
                \"isobject\": \"^3.0.1\"
            }
        },
        \"object.reduce\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/object.reduce/-/object.reduce-1.0.1.tgz\",
            \"integrity\": \"sha1-b+NI8qx/oPlcpiEiZZkJaCW7A60=\",
            \"dev\": true,
            \"requires\": {
                \"for-own\": \"^1.0.0\",
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"on-finished\": {
            \"version\": \"2.3.0\",
            \"resolved\": \"https://registry.npmjs.org/on-finished/-/on-finished-2.3.0.tgz\",
            \"integrity\": \"sha1-IPEzZIGwg811M3mSoWlxqi2QaUc=\",
            \"dev\": true,
            \"requires\": {
                \"ee-first\": \"1.1.1\"
            }
        },
        \"once\": {
            \"version\": \"1.4.0\",
            \"resolved\": \"https://registry.npmjs.org/once/-/once-1.4.0.tgz\",
            \"integrity\": \"sha1-WDsap3WWHUsROsF9nFC6753Xa9E=\",
            \"dev\": true,
            \"requires\": {
                \"wrappy\": \"1\"
            }
        },
        \"openurl\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/openurl/-/openurl-1.1.1.tgz\",
            \"integrity\": \"sha1-OHW0sO96UsFW8NtB1GCduw+Us4c=\",
            \"dev\": true
        },
        \"opn\": {
            \"version\": \"5.3.0\",
            \"resolved\": \"https://registry.npmjs.org/opn/-/opn-5.3.0.tgz\",
            \"integrity\": \"sha512-bYJHo/LOmoTd+pfiYhfZDnf9zekVJrY+cnS2a5F2x+w5ppvTqObojTP7WiFG+kVZs9Inw+qQ/lw7TroWwhdd2g==\",
            \"dev\": true,
            \"requires\": {
                \"is-wsl\": \"^1.1.0\"
            }
        },
        \"ordered-read-streams\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/ordered-read-streams/-/ordered-read-streams-1.0.1.tgz\",
            \"integrity\": \"sha1-d8DLN8QVJdZBZtmQ/61+xqDhNj4=\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"^2.0.1\"
            }
        },
        \"os-locale\": {
            \"version\": \"1.4.0\",
            \"resolved\": \"https://registry.npmjs.org/os-locale/-/os-locale-1.4.0.tgz\",
            \"integrity\": \"sha1-IPnxeuKe00XoveWDsT0gCYA8FNk=\",
            \"dev\": true,
            \"requires\": {
                \"lcid\": \"^1.0.0\"
            }
        },
        \"p-map\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/p-map/-/p-map-2.1.0.tgz\",
            \"integrity\": \"sha512-y3b8Kpd8OAN444hxfBbFfj1FY/RjtTd8tzYwhUqNYXx0fXx2iX4maP4Qr6qhIKbQXI02wTLAda4fYUbDagTUFw==\",
            \"dev\": true
        },
        \"parse-filepath\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/parse-filepath/-/parse-filepath-1.0.2.tgz\",
            \"integrity\": \"sha1-pjISf1Oq89FYdvWHLz/6x2PWyJE=\",
            \"dev\": true,
            \"requires\": {
                \"is-absolute\": \"^1.0.0\",
                \"map-cache\": \"^0.2.0\",
                \"path-root\": \"^0.1.1\"
            }
        },
        \"parse-json\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/parse-json/-/parse-json-2.2.0.tgz\",
            \"integrity\": \"sha1-9ID0BDTvgHQfhGkJn43qGPVaTck=\",
            \"dev\": true,
            \"requires\": {
                \"error-ex\": \"^1.2.0\"
            }
        },
        \"parse-node-version\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/parse-node-version/-/parse-node-version-1.0.1.tgz\",
            \"integrity\": \"sha512-3YHlOa/JgH6Mnpr05jP9eDG254US9ek25LyIxZlDItp2iJtwyaXQb57lBYLdT3MowkUFYEV2XXNAYIPlESvJlA==\",
            \"dev\": true
        },
        \"parse-passwd\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/parse-passwd/-/parse-passwd-1.0.0.tgz\",
            \"integrity\": \"sha1-bVuTSkVpk7I9N/QKOC1vFmao5cY=\",
            \"dev\": true
        },
        \"parseqs\": {
            \"version\": \"0.0.5\",
            \"resolved\": \"https://registry.npmjs.org/parseqs/-/parseqs-0.0.5.tgz\",
            \"integrity\": \"sha1-1SCKNzjkZ2bikbouoXNoSSGouJ0=\",
            \"dev\": true,
            \"requires\": {
                \"better-assert\": \"~1.0.0\"
            }
        },
        \"parseuri\": {
            \"version\": \"0.0.5\",
            \"resolved\": \"https://registry.npmjs.org/parseuri/-/parseuri-0.0.5.tgz\",
            \"integrity\": \"sha1-gCBKUNTbt3m/3G6+J3jZDkvOMgo=\",
            \"dev\": true,
            \"requires\": {
                \"better-assert\": \"~1.0.0\"
            }
        },
        \"parseurl\": {
            \"version\": \"1.3.3\",
            \"resolved\": \"https://registry.npmjs.org/parseurl/-/parseurl-1.3.3.tgz\",
            \"integrity\": \"sha512-CiyeOxFT/JZyN5m0z9PfXw4SCBJ6Sygz1Dpl0wqjlhDEGGBP1GnsUVEL0p63hoG1fcj3fHynXi9NYO4nWOL+qQ==\",
            \"dev\": true
        },
        \"pascalcase\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/pascalcase/-/pascalcase-0.1.1.tgz\",
            \"integrity\": \"sha1-s2PlXoAGym/iF4TS2yK9FdeRfxQ=\",
            \"dev\": true
        },
        \"path-dirname\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/path-dirname/-/path-dirname-1.0.2.tgz\",
            \"integrity\": \"sha1-zDPSTVJeCZpTiMAzbG4yuRYGCeA=\",
            \"dev\": true
        },
        \"path-exists\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-2.1.0.tgz\",
            \"integrity\": \"sha1-D+tsZPD8UY2adU3V77YscCJ2H0s=\",
            \"dev\": true,
            \"requires\": {
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"path-is-absolute\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/path-is-absolute/-/path-is-absolute-1.0.1.tgz\",
            \"integrity\": \"sha1-F0uSaHNVNP+8es5r9TpanhtcX18=\",
            \"dev\": true
        },
        \"path-is-inside\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/path-is-inside/-/path-is-inside-1.0.2.tgz\",
            \"integrity\": \"sha1-NlQX3t5EQw0cEa9hAn+s8HS9/FM=\",
            \"dev\": true
        },
        \"path-parse\": {
            \"version\": \"1.0.6\",
            \"resolved\": \"https://registry.npmjs.org/path-parse/-/path-parse-1.0.6.tgz\",
            \"integrity\": \"sha512-GSmOT2EbHrINBf9SR7CDELwlJ8AENk3Qn7OikK4nFYAu3Ote2+JYNVvkpAEQm3/TLNEJFD/xZJjzyxg3KBWOzw==\",
            \"dev\": true
        },
        \"path-root\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/path-root/-/path-root-0.1.1.tgz\",
            \"integrity\": \"sha1-mkpoFMrBwM1zNgqV8yCDyOpHRbc=\",
            \"dev\": true,
            \"requires\": {
                \"path-root-regex\": \"^0.1.0\"
            }
        },
        \"path-root-regex\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/path-root-regex/-/path-root-regex-0.1.2.tgz\",
            \"integrity\": \"sha1-v8zcjfWxLcUsi0PsONGNcsBLqW0=\",
            \"dev\": true
        },
        \"path-type\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/path-type/-/path-type-1.1.0.tgz\",
            \"integrity\": \"sha1-WcRPfuSR2nBNpBXaWkBwuk+P5EE=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"pify\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"pify\": {
            \"version\": \"2.3.0\",
            \"resolved\": \"https://registry.npmjs.org/pify/-/pify-2.3.0.tgz\",
            \"integrity\": \"sha1-7RQaasBDqEnqWISY59yosVMw6Qw=\",
            \"dev\": true
        },
        \"pinkie\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/pinkie/-/pinkie-2.0.4.tgz\",
            \"integrity\": \"sha1-clVrgM+g1IqXToDnckjoDtT3+HA=\",
            \"dev\": true
        },
        \"pinkie-promise\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/pinkie-promise/-/pinkie-promise-2.0.1.tgz\",
            \"integrity\": \"sha1-ITXW36ejWMBprJsXh3YogihFD/o=\",
            \"dev\": true,
            \"requires\": {
                \"pinkie\": \"^2.0.0\"
            }
        },
        \"portscanner\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/portscanner/-/portscanner-2.1.1.tgz\",
            \"integrity\": \"sha1-6rtAnk3iSVD1oqUW01rnaTQ/u5Y=\",
            \"dev\": true,
            \"requires\": {
                \"async\": \"1.5.2\",
                \"is-number-like\": \"^1.0.3\"
            }
        },
        \"posix-character-classes\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/posix-character-classes/-/posix-character-classes-0.1.1.tgz\",
            \"integrity\": \"sha1-AerA/jta9xoqbAL+q7jB/vfgDqs=\",
            \"dev\": true
        },
        \"pretty-hrtime\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/pretty-hrtime/-/pretty-hrtime-1.0.3.tgz\",
            \"integrity\": \"sha1-t+PqQkNaTJsnWdmeDyAesZWALuE=\",
            \"dev\": true
        },
        \"process-nextick-args\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/process-nextick-args/-/process-nextick-args-2.0.0.tgz\",
            \"integrity\": \"sha512-MtEC1TqN0EU5nephaJ4rAtThHtC86dNN9qCuEhtshvpVBkAW5ZO7BASN9REnF9eoXGcRub+pFuKEpOHE+HbEMw==\",
            \"dev\": true
        },
        \"pump\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/pump/-/pump-2.0.1.tgz\",
            \"integrity\": \"sha512-ruPMNRkN3MHP1cWJc9OWr+T/xDP0jhXYCLfJcBuX54hhfIBnaQmAUMfDcG4DM5UMWByBbJY69QSphm3jtDKIkA==\",
            \"dev\": true,
            \"requires\": {
                \"end-of-stream\": \"^1.1.0\",
                \"once\": \"^1.3.1\"
            }
        },
        \"pumpify\": {
            \"version\": \"1.5.1\",
            \"resolved\": \"https://registry.npmjs.org/pumpify/-/pumpify-1.5.1.tgz\",
            \"integrity\": \"sha512-oClZI37HvuUJJxSKKrC17bZ9Cu0ZYhEAGPsPUy9KlMUmv9dKX2o77RUmq7f3XjIxbwyGwYzbzQ1L2Ks8sIradQ==\",
            \"dev\": true,
            \"requires\": {
                \"duplexify\": \"^3.6.0\",
                \"inherits\": \"^2.0.3\",
                \"pump\": \"^2.0.0\"
            }
        },
        \"qs\": {
            \"version\": \"6.2.3\",
            \"resolved\": \"https://registry.npmjs.org/qs/-/qs-6.2.3.tgz\",
            \"integrity\": \"sha1-HPyyXBCpsrSDBT/zn138kjOQjP4=\",
            \"dev\": true
        },
        \"range-parser\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/range-parser/-/range-parser-1.2.1.tgz\",
            \"integrity\": \"sha512-Hrgsx+orqoygnmhFbKaHE6c296J+HTAQXoxEF6gNupROmmGJRoyzfG3ccAveqCBrwr/2yxQ5BVd/GTl5agOwSg==\",
            \"dev\": true
        },
        \"raw-body\": {
            \"version\": \"2.4.0\",
            \"resolved\": \"https://registry.npmjs.org/raw-body/-/raw-body-2.4.0.tgz\",
            \"integrity\": \"sha512-4Oz8DUIwdvoa5qMJelxipzi/iJIi40O5cGV1wNYp5hvZP8ZN0T+jiNkL0QepXs+EsQ9XJ8ipEDoiH70ySUJP3Q==\",
            \"dev\": true,
            \"requires\": {
                \"bytes\": \"3.1.0\",
                \"http-errors\": \"1.7.2\",
                \"iconv-lite\": \"0.4.24\",
                \"unpipe\": \"1.0.0\"
            }
        },
        \"read-pkg\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/read-pkg/-/read-pkg-1.1.0.tgz\",
            \"integrity\": \"sha1-9f+qXs0pyzHAR0vKfXVra7KePyg=\",
            \"dev\": true,
            \"requires\": {
                \"load-json-file\": \"^1.0.0\",
                \"normalize-package-data\": \"^2.3.2\",
                \"path-type\": \"^1.0.0\"
            }
        },
        \"read-pkg-up\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/read-pkg-up/-/read-pkg-up-1.0.1.tgz\",
            \"integrity\": \"sha1-nWPBMnbAZZGNV/ACpX9AobZD+wI=\",
            \"dev\": true,
            \"requires\": {
                \"find-up\": \"^1.0.0\",
                \"read-pkg\": \"^1.0.0\"
            }
        },
        \"readable-stream\": {
            \"version\": \"2.3.6\",
            \"resolved\": \"https://registry.npmjs.org/readable-stream/-/readable-stream-2.3.6.tgz\",
            \"integrity\": \"sha512-tQtKA9WIAhBF3+VLAseyMqZeBjW0AHJoxOtYqSUZNJxauErmLbVm2FW1y+J/YA9dUrAC39ITejlZWhVIwawkKw==\",
            \"dev\": true,
            \"requires\": {
                \"core-util-is\": \"~1.0.0\",
                \"inherits\": \"~2.0.3\",
                \"isarray\": \"~1.0.0\",
                \"process-nextick-args\": \"~2.0.0\",
                \"safe-buffer\": \"~5.1.1\",
                \"string_decoder\": \"~1.1.1\",
                \"util-deprecate\": \"~1.0.1\"
            },
            \"dependencies\": {
                \"isarray\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-1.0.0.tgz\",
                    \"integrity\": \"sha1-u5NdSFgsuhaMBoNJV6VKPgcSTxE=\",
                    \"dev\": true
                }
            }
        },
        \"readdirp\": {
            \"version\": \"2.2.1\",
            \"resolved\": \"https://registry.npmjs.org/readdirp/-/readdirp-2.2.1.tgz\",
            \"integrity\": \"sha512-1JU/8q+VgFZyxwrJ+SVIOsh+KywWGpds3NTqikiKpDMZWScmAYyKIgqkO+ARvNWJfXeXR1zxz7aHF4u4CyH6vQ==\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.11\",
                \"micromatch\": \"^3.1.10\",
                \"readable-stream\": \"^2.0.2\"
            }
        },
        \"rechoir\": {
            \"version\": \"0.6.2\",
            \"resolved\": \"https://registry.npmjs.org/rechoir/-/rechoir-0.6.2.tgz\",
            \"integrity\": \"sha1-hSBLVNuoLVdC4oyWdW70OvUOM4Q=\",
            \"dev\": true,
            \"requires\": {
                \"resolve\": \"^1.1.6\"
            }
        },
        \"regex-not\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/regex-not/-/regex-not-1.0.2.tgz\",
            \"integrity\": \"sha512-J6SDjUgDxQj5NusnOtdFxDwN/+HWykR8GELwctJ7mdqhcyy1xEc4SRFHUXvxTp661YaVKAjfRLZ9cCqS6tn32A==\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^3.0.2\",
                \"safe-regex\": \"^1.1.0\"
            }
        },
        \"remove-bom-buffer\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/remove-bom-buffer/-/remove-bom-buffer-3.0.0.tgz\",
            \"integrity\": \"sha512-8v2rWhaakv18qcvNeli2mZ/TMTL2nEyAKRvzo1WtnZBl15SHyEhrCu2/xKlJyUFKHiHgfXIyuY6g2dObJJycXQ==\",
            \"dev\": true,
            \"requires\": {
                \"is-buffer\": \"^1.1.5\",
                \"is-utf8\": \"^0.2.1\"
            }
        },
        \"remove-bom-stream\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/remove-bom-stream/-/remove-bom-stream-1.2.0.tgz\",
            \"integrity\": \"sha1-BfGlk/FuQuH7kOv1nejlaVJflSM=\",
            \"dev\": true,
            \"requires\": {
                \"remove-bom-buffer\": \"^3.0.0\",
                \"safe-buffer\": \"^5.1.0\",
                \"through2\": \"^2.0.3\"
            }
        },
        \"remove-trailing-separator\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/remove-trailing-separator/-/remove-trailing-separator-1.1.0.tgz\",
            \"integrity\": \"sha1-wkvOKig62tW8P1jg1IJJuSN52O8=\",
            \"dev\": true
        },
        \"repeat-element\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/repeat-element/-/repeat-element-1.1.3.tgz\",
            \"integrity\": \"sha512-ahGq0ZnV5m5XtZLMb+vP76kcAM5nkLqk0lpqAuojSKGgQtn4eRi4ZZGm2olo2zKFH+sMsWaqOCW1dqAnOru72g==\",
            \"dev\": true
        },
        \"repeat-string\": {
            \"version\": \"1.6.1\",
            \"resolved\": \"https://registry.npmjs.org/repeat-string/-/repeat-string-1.6.1.tgz\",
            \"integrity\": \"sha1-jcrkcOHIirwtYA//Sndihtp15jc=\",
            \"dev\": true
        },
        \"replace-ext\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/replace-ext/-/replace-ext-1.0.0.tgz\",
            \"integrity\": \"sha1-3mMSg3P8v3w8z6TeWkgMRaZ5WOs=\",
            \"dev\": true
        },
        \"replace-homedir\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/replace-homedir/-/replace-homedir-1.0.0.tgz\",
            \"integrity\": \"sha1-6H9tUTuSjd6AgmDBK+f+xv9ueYw=\",
            \"dev\": true,
            \"requires\": {
                \"homedir-polyfill\": \"^1.0.1\",
                \"is-absolute\": \"^1.0.0\",
                \"remove-trailing-separator\": \"^1.1.0\"
            }
        },
        \"require-directory\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/require-directory/-/require-directory-2.1.1.tgz\",
            \"integrity\": \"sha1-jGStX9MNqxyXbiNE/+f3kqam30I=\",
            \"dev\": true
        },
        \"require-main-filename\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/require-main-filename/-/require-main-filename-1.0.1.tgz\",
            \"integrity\": \"sha1-l/cXtp1IeE9fUmpsWqj/3aBVpNE=\",
            \"dev\": true
        },
        \"requires-port\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/requires-port/-/requires-port-1.0.0.tgz\",
            \"integrity\": \"sha1-kl0mAdOaxIXgkc8NpcbmlNw9yv8=\",
            \"dev\": true
        },
        \"resolve\": {
            \"version\": \"1.10.1\",
            \"resolved\": \"https://registry.npmjs.org/resolve/-/resolve-1.10.1.tgz\",
            \"integrity\": \"sha512-KuIe4mf++td/eFb6wkaPbMDnP6kObCaEtIDuHOUED6MNUo4K670KZUHuuvYPZDxNF0WVLw49n06M2m2dXphEzA==\",
            \"dev\": true,
            \"requires\": {
                \"path-parse\": \"^1.0.6\"
            }
        },
        \"resolve-dir\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/resolve-dir/-/resolve-dir-1.0.1.tgz\",
            \"integrity\": \"sha1-eaQGRMNivoLybv/nOcm7U4IEb0M=\",
            \"dev\": true,
            \"requires\": {
                \"expand-tilde\": \"^2.0.0\",
                \"global-modules\": \"^1.0.0\"
            }
        },
        \"resolve-options\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/resolve-options/-/resolve-options-1.1.0.tgz\",
            \"integrity\": \"sha1-MrueOcBtZzONyTeMDW1gdFZq0TE=\",
            \"dev\": true,
            \"requires\": {
                \"value-or-function\": \"^3.0.0\"
            }
        },
        \"resolve-url\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/resolve-url/-/resolve-url-0.2.1.tgz\",
            \"integrity\": \"sha1-LGN/53yJOv0qZj/iGqkIAGjiBSo=\",
            \"dev\": true
        },
        \"resp-modifier\": {
            \"version\": \"6.0.2\",
            \"resolved\": \"https://registry.npmjs.org/resp-modifier/-/resp-modifier-6.0.2.tgz\",
            \"integrity\": \"sha1-sSTeXE+6/LpUH0j/pzlw9KpFa08=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"^2.2.0\",
                \"minimatch\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                }
            }
        },
        \"ret\": {
            \"version\": \"0.1.15\",
            \"resolved\": \"https://registry.npmjs.org/ret/-/ret-0.1.15.tgz\",
            \"integrity\": \"sha512-TTlYpa+OL+vMMNG24xSlQGEJ3B/RzEfUlLct7b5G/ytav+wPrplCpVMFuwzXbkecJrb6IYo1iFb0S9v37754mg==\",
            \"dev\": true
        },
        \"rimraf\": {
            \"version\": \"2.6.3\",
            \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.6.3.tgz\",
            \"integrity\": \"sha512-mwqeW5XsA2qAejG46gYdENaxXjx9onRNCfn7L0duuP4hCuTIi/QO7PDK07KJfp1d+izWPrzEJDcSqBa0OZQriA==\",
            \"dev\": true,
            \"requires\": {
                \"glob\": \"^7.1.3\"
            }
        },
        \"rx\": {
            \"version\": \"4.1.0\",
            \"resolved\": \"https://registry.npmjs.org/rx/-/rx-4.1.0.tgz\",
            \"integrity\": \"sha1-pfE/957zt0D+MKqAP7CfmIBdR4I=\",
            \"dev\": true
        },
        \"rxjs\": {
            \"version\": \"5.5.12\",
            \"resolved\": \"https://registry.npmjs.org/rxjs/-/rxjs-5.5.12.tgz\",
            \"integrity\": \"sha512-xx2itnL5sBbqeeiVgNPVuQQ1nC8Jp2WfNJhXWHmElW9YmrpS9UVnNzhP3EH3HFqexO5Tlp8GhYY+WEcqcVMvGw==\",
            \"dev\": true,
            \"requires\": {
                \"symbol-observable\": \"1.0.1\"
            }
        },
        \"safe-buffer\": {
            \"version\": \"5.1.2\",
            \"resolved\": \"https://registry.npmjs.org/safe-buffer/-/safe-buffer-5.1.2.tgz\",
            \"integrity\": \"sha512-Gd2UZBJDkXlY7GbJxfsE8/nvKkUEU1G38c1siN6QP6a9PT9MmHB8GnpscSmMJSoF8LOIrt8ud/wPtojys4G6+g==\",
            \"dev\": true
        },
        \"safe-regex\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/safe-regex/-/safe-regex-1.1.0.tgz\",
            \"integrity\": \"sha1-QKNmnzsHfR6UPURinhV91IAjvy4=\",
            \"dev\": true,
            \"requires\": {
                \"ret\": \"~0.1.10\"
            }
        },
        \"safer-buffer\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/safer-buffer/-/safer-buffer-2.1.2.tgz\",
            \"integrity\": \"sha512-YZo3K82SD7Riyi0E1EQPojLz7kpepnSQI9IyPbHHg1XXXevb5dJI7tpyN2ADxGcQbHG7vcyRHk0cbwqcQriUtg==\",
            \"dev\": true
        },
        \"semver\": {
            \"version\": \"5.7.0\",
            \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.7.0.tgz\",
            \"integrity\": \"sha512-Ya52jSX2u7QKghxeoFGpLwCtGlt7j0oY9DYb5apt9nPlJ42ID+ulTXESnt/qAQcoSERyZ5sl3LDIOw0nAn/5DA==\",
            \"dev\": true
        },
        \"semver-greatest-satisfied-range\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/semver-greatest-satisfied-range/-/semver-greatest-satisfied-range-1.1.0.tgz\",
            \"integrity\": \"sha1-E+jCZYq5aRywzXEJMkAoDTb3els=\",
            \"dev\": true,
            \"requires\": {
                \"sver-compat\": \"^1.5.0\"
            }
        },
        \"send\": {
            \"version\": \"0.16.2\",
            \"resolved\": \"https://registry.npmjs.org/send/-/send-0.16.2.tgz\",
            \"integrity\": \"sha512-E64YFPUssFHEFBvpbbjr44NCLtI1AohxQ8ZSiJjQLskAdKuriYEP6VyGEsRDH8ScozGpkaX1BGvhanqCwkcEZw==\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"2.6.9\",
                \"depd\": \"~1.1.2\",
                \"destroy\": \"~1.0.4\",
                \"encodeurl\": \"~1.0.2\",
                \"escape-html\": \"~1.0.3\",
                \"etag\": \"~1.8.1\",
                \"fresh\": \"0.5.2\",
                \"http-errors\": \"~1.6.2\",
                \"mime\": \"1.4.1\",
                \"ms\": \"2.0.0\",
                \"on-finished\": \"~2.3.0\",
                \"range-parser\": \"~1.2.0\",
                \"statuses\": \"~1.4.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"http-errors\": {
                    \"version\": \"1.6.3\",
                    \"resolved\": \"https://registry.npmjs.org/http-errors/-/http-errors-1.6.3.tgz\",
                    \"integrity\": \"sha1-i1VoC7S+KDoLW/TqLjhYC+HZMg0=\",
                    \"dev\": true,
                    \"requires\": {
                        \"depd\": \"~1.1.2\",
                        \"inherits\": \"2.0.3\",
                        \"setprototypeof\": \"1.1.0\",
                        \"statuses\": \">= 1.4.0 < 2\"
                    }
                },
                \"setprototypeof\": {
                    \"version\": \"1.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/setprototypeof/-/setprototypeof-1.1.0.tgz\",
                    \"integrity\": \"sha512-BvE/TwpZX4FXExxOxZyRGQQv651MSwmWKZGqvmPcRIjDqWub67kTKuIMx43cZZrS/cBBzwBcNDWoFxt2XEFIpQ==\",
                    \"dev\": true
                },
                \"statuses\": {
                    \"version\": \"1.4.0\",
                    \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.4.0.tgz\",
                    \"integrity\": \"sha512-zhSCtt8v2NDrRlPQpCNtw/heZLtfUDqxBM1udqikb/Hbk52LK4nQSwr10u77iopCW5LsyHpuXS0GnEc48mLeew==\",
                    \"dev\": true
                }
            }
        },
        \"serve-index\": {
            \"version\": \"1.9.1\",
            \"resolved\": \"https://registry.npmjs.org/serve-index/-/serve-index-1.9.1.tgz\",
            \"integrity\": \"sha1-03aNabHn2C5c4FD/9bRTvqEqkjk=\",
            \"dev\": true,
            \"requires\": {
                \"accepts\": \"~1.3.4\",
                \"batch\": \"0.6.1\",
                \"debug\": \"2.6.9\",
                \"escape-html\": \"~1.0.3\",
                \"http-errors\": \"~1.6.2\",
                \"mime-types\": \"~2.1.17\",
                \"parseurl\": \"~1.3.2\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"http-errors\": {
                    \"version\": \"1.6.3\",
                    \"resolved\": \"https://registry.npmjs.org/http-errors/-/http-errors-1.6.3.tgz\",
                    \"integrity\": \"sha1-i1VoC7S+KDoLW/TqLjhYC+HZMg0=\",
                    \"dev\": true,
                    \"requires\": {
                        \"depd\": \"~1.1.2\",
                        \"inherits\": \"2.0.3\",
                        \"setprototypeof\": \"1.1.0\",
                        \"statuses\": \">= 1.4.0 < 2\"
                    }
                },
                \"setprototypeof\": {
                    \"version\": \"1.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/setprototypeof/-/setprototypeof-1.1.0.tgz\",
                    \"integrity\": \"sha512-BvE/TwpZX4FXExxOxZyRGQQv651MSwmWKZGqvmPcRIjDqWub67kTKuIMx43cZZrS/cBBzwBcNDWoFxt2XEFIpQ==\",
                    \"dev\": true
                },
                \"statuses\": {
                    \"version\": \"1.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.5.0.tgz\",
                    \"integrity\": \"sha1-Fhx9rBd2Wf2YEfQ3cfqZOBR4Yow=\",
                    \"dev\": true
                }
            }
        },
        \"serve-static\": {
            \"version\": \"1.13.2\",
            \"resolved\": \"https://registry.npmjs.org/serve-static/-/serve-static-1.13.2.tgz\",
            \"integrity\": \"sha512-p/tdJrO4U387R9oMjb1oj7qSMaMfmOyd4j9hOFoxZe2baQszgHcSWjuya/CiT5kgZZKRudHNOA0pYXOl8rQ5nw==\",
            \"dev\": true,
            \"requires\": {
                \"encodeurl\": \"~1.0.2\",
                \"escape-html\": \"~1.0.3\",
                \"parseurl\": \"~1.3.2\",
                \"send\": \"0.16.2\"
            }
        },
        \"server-destroy\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/server-destroy/-/server-destroy-1.0.1.tgz\",
            \"integrity\": \"sha1-8Tv5KOQrnD55OD5hzDmYtdFObN0=\",
            \"dev\": true
        },
        \"set-blocking\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/set-blocking/-/set-blocking-2.0.0.tgz\",
            \"integrity\": \"sha1-BF+XgtARrppoA93TgrJDkrPYkPc=\",
            \"dev\": true
        },
        \"set-value\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/set-value/-/set-value-2.0.0.tgz\",
            \"integrity\": \"sha512-hw0yxk9GT/Hr5yJEYnHNKYXkIA8mVJgd9ditYZCe16ZczcaELYYcfvaXesNACk2O8O0nTiPQcQhGUQj8JLzeeg==\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^2.0.1\",
                \"is-extendable\": \"^0.1.1\",
                \"is-plain-object\": \"^2.0.3\",
                \"split-string\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"setprototypeof\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/setprototypeof/-/setprototypeof-1.1.1.tgz\",
            \"integrity\": \"sha512-JvdAWfbXeIGaZ9cILp38HntZSFSo3mWg6xGcJJsd+d4aRMOqauag1C63dJfDw7OaMYwEbHMOxEZ1lqVRYP2OAw==\",
            \"dev\": true
        },
        \"snapdragon\": {
            \"version\": \"0.8.2\",
            \"resolved\": \"https://registry.npmjs.org/snapdragon/-/snapdragon-0.8.2.tgz\",
            \"integrity\": \"sha512-FtyOnWN/wCHTVXOMwvSv26d+ko5vWlIDD6zoUJ7LW8vh+ZBC8QdljveRP+crNrtBwioEUWy/4dMtbBjA4ioNlg==\",
            \"dev\": true,
            \"requires\": {
                \"base\": \"^0.11.1\",
                \"debug\": \"^2.2.0\",
                \"define-property\": \"^0.2.5\",
                \"extend-shallow\": \"^2.0.1\",
                \"map-cache\": \"^0.2.2\",
                \"source-map\": \"^0.5.6\",
                \"source-map-resolve\": \"^0.5.0\",
                \"use\": \"^3.1.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                },
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"snapdragon-node\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/snapdragon-node/-/snapdragon-node-2.1.1.tgz\",
            \"integrity\": \"sha512-O27l4xaMYt/RSQ5TR3vpWCAB5Kb/czIcqUFOM/C4fYcLnbZUc1PkjTAMjof2pBWaSTwOUd6qUHcFGVGj7aIwnw==\",
            \"dev\": true,
            \"requires\": {
                \"define-property\": \"^1.0.0\",
                \"isobject\": \"^3.0.0\",
                \"snapdragon-util\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
                    \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^1.0.0\"
                    }
                },
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"snapdragon-util\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/snapdragon-util/-/snapdragon-util-3.0.1.tgz\",
            \"integrity\": \"sha512-mbKkMdQKsjX4BAL4bRYTj21edOf8cN7XHdYUJEe+Zn99hVEYcMvKPct1IqNe7+AZPirn8BCDOQBHQZknqmKlZQ==\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.2.0\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"socket.io\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/socket.io/-/socket.io-2.1.1.tgz\",
            \"integrity\": \"sha512-rORqq9c+7W0DAK3cleWNSyfv/qKXV99hV4tZe+gGLfBECw3XEhBy7x85F3wypA9688LKjtwO9pX9L33/xQI8yA==\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"~3.1.0\",
                \"engine.io\": \"~3.2.0\",
                \"has-binary2\": \"~1.0.2\",
                \"socket.io-adapter\": \"~1.1.0\",
                \"socket.io-client\": \"2.1.1\",
                \"socket.io-parser\": \"~3.2.0\"
            },
            \"dependencies\": {
                \"engine.io-client\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/engine.io-client/-/engine.io-client-3.2.1.tgz\",
                    \"integrity\": \"sha512-y5AbkytWeM4jQr7m/koQLc5AxpRKC1hEVUb/s1FUAWEJq5AzJJ4NLvzuKPuxtDi5Mq755WuDvZ6Iv2rXj4PTzw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"component-emitter\": \"1.2.1\",
                        \"component-inherit\": \"0.0.3\",
                        \"debug\": \"~3.1.0\",
                        \"engine.io-parser\": \"~2.1.1\",
                        \"has-cors\": \"1.1.0\",
                        \"indexof\": \"0.0.1\",
                        \"parseqs\": \"0.0.5\",
                        \"parseuri\": \"0.0.5\",
                        \"ws\": \"~3.3.1\",
                        \"xmlhttprequest-ssl\": \"~1.5.4\",
                        \"yeast\": \"0.1.2\"
                    }
                },
                \"socket.io-client\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/socket.io-client/-/socket.io-client-2.1.1.tgz\",
                    \"integrity\": \"sha512-jxnFyhAuFxYfjqIgduQlhzqTcOEQSn+OHKVfAxWaNWa7ecP7xSNk2Dx/3UEsDcY7NcFafxvNvKPmmO7HTwTxGQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"backo2\": \"1.0.2\",
                        \"base64-arraybuffer\": \"0.1.5\",
                        \"component-bind\": \"1.0.0\",
                        \"component-emitter\": \"1.2.1\",
                        \"debug\": \"~3.1.0\",
                        \"engine.io-client\": \"~3.2.0\",
                        \"has-binary2\": \"~1.0.2\",
                        \"has-cors\": \"1.1.0\",
                        \"indexof\": \"0.0.1\",
                        \"object-component\": \"0.0.3\",
                        \"parseqs\": \"0.0.5\",
                        \"parseuri\": \"0.0.5\",
                        \"socket.io-parser\": \"~3.2.0\",
                        \"to-array\": \"0.1.4\"
                    }
                },
                \"socket.io-parser\": {
                    \"version\": \"3.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/socket.io-parser/-/socket.io-parser-3.2.0.tgz\",
                    \"integrity\": \"sha512-FYiBx7rc/KORMJlgsXysflWx/RIvtqZbyGLlHZvjfmPTPeuD/I8MaW7cfFrj5tRltICJdgwflhfZ3NVVbVLFQA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"component-emitter\": \"1.2.1\",
                        \"debug\": \"~3.1.0\",
                        \"isarray\": \"2.0.1\"
                    }
                },
                \"ws\": {
                    \"version\": \"3.3.3\",
                    \"resolved\": \"https://registry.npmjs.org/ws/-/ws-3.3.3.tgz\",
                    \"integrity\": \"sha512-nnWLa/NwZSt4KQJu51MYlCcSQ5g7INpOrOMt4XV8j4dqTXdmlUmSHQ8/oLC069ckre0fRsgfvsKwbTdtKLCDkA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"async-limiter\": \"~1.0.0\",
                        \"safe-buffer\": \"~5.1.0\",
                        \"ultron\": \"~1.1.0\"
                    }
                }
            }
        },
        \"socket.io-adapter\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/socket.io-adapter/-/socket.io-adapter-1.1.1.tgz\",
            \"integrity\": \"sha1-KoBeihTWNyEk3ZFZrUUC+MsH8Gs=\",
            \"dev\": true
        },
        \"socket.io-client\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/socket.io-client/-/socket.io-client-2.2.0.tgz\",
            \"integrity\": \"sha512-56ZrkTDbdTLmBIyfFYesgOxsjcLnwAKoN4CiPyTVkMQj3zTUh0QAx3GbvIvLpFEOvQWu92yyWICxB0u7wkVbYA==\",
            \"dev\": true,
            \"requires\": {
                \"backo2\": \"1.0.2\",
                \"base64-arraybuffer\": \"0.1.5\",
                \"component-bind\": \"1.0.0\",
                \"component-emitter\": \"1.2.1\",
                \"debug\": \"~3.1.0\",
                \"engine.io-client\": \"~3.3.1\",
                \"has-binary2\": \"~1.0.2\",
                \"has-cors\": \"1.1.0\",
                \"indexof\": \"0.0.1\",
                \"object-component\": \"0.0.3\",
                \"parseqs\": \"0.0.5\",
                \"parseuri\": \"0.0.5\",
                \"socket.io-parser\": \"~3.3.0\",
                \"to-array\": \"0.1.4\"
            }
        },
        \"socket.io-parser\": {
            \"version\": \"3.3.0\",
            \"resolved\": \"https://registry.npmjs.org/socket.io-parser/-/socket.io-parser-3.3.0.tgz\",
            \"integrity\": \"sha512-hczmV6bDgdaEbVqhAeVMM/jfUfzuEZHsQg6eOmLgJht6G3mPKMxYm75w2+qhAQZ+4X+1+ATZ+QFKeOZD5riHng==\",
            \"dev\": true,
            \"requires\": {
                \"component-emitter\": \"1.2.1\",
                \"debug\": \"~3.1.0\",
                \"isarray\": \"2.0.1\"
            }
        },
        \"source-map\": {
            \"version\": \"0.5.7\",
            \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.5.7.tgz\",
            \"integrity\": \"sha1-igOdLRAh0i0eoUyA2OpGi6LvP8w=\",
            \"dev\": true
        },
        \"source-map-resolve\": {
            \"version\": \"0.5.2\",
            \"resolved\": \"https://registry.npmjs.org/source-map-resolve/-/source-map-resolve-0.5.2.tgz\",
            \"integrity\": \"sha512-MjqsvNwyz1s0k81Goz/9vRBe9SZdB09Bdw+/zYyO+3CuPk6fouTaxscHkgtE8jKvf01kVfl8riHzERQ/kefaSA==\",
            \"dev\": true,
            \"requires\": {
                \"atob\": \"^2.1.1\",
                \"decode-uri-component\": \"^0.2.0\",
                \"resolve-url\": \"^0.2.1\",
                \"source-map-url\": \"^0.4.0\",
                \"urix\": \"^0.1.0\"
            }
        },
        \"source-map-url\": {
            \"version\": \"0.4.0\",
            \"resolved\": \"https://registry.npmjs.org/source-map-url/-/source-map-url-0.4.0.tgz\",
            \"integrity\": \"sha1-PpNdfd1zYxuXZZlW1VEo6HtQhKM=\",
            \"dev\": true
        },
        \"sparkles\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/sparkles/-/sparkles-1.0.1.tgz\",
            \"integrity\": \"sha512-dSO0DDYUahUt/0/pD/Is3VIm5TGJjludZ0HVymmhYF6eNA53PVLhnUk0znSYbH8IYBuJdCE+1luR22jNLMaQdw==\",
            \"dev\": true
        },
        \"spdx-correct\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/spdx-correct/-/spdx-correct-3.1.0.tgz\",
            \"integrity\": \"sha512-lr2EZCctC2BNR7j7WzJ2FpDznxky1sjfxvvYEyzxNyb6lZXHODmEoJeFu4JupYlkfha1KZpJyoqiJ7pgA1qq8Q==\",
            \"dev\": true,
            \"requires\": {
                \"spdx-expression-parse\": \"^3.0.0\",
                \"spdx-license-ids\": \"^3.0.0\"
            }
        },
        \"spdx-exceptions\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/spdx-exceptions/-/spdx-exceptions-2.2.0.tgz\",
            \"integrity\": \"sha512-2XQACfElKi9SlVb1CYadKDXvoajPgBVPn/gOQLrTvHdElaVhr7ZEbqJaRnJLVNeaI4cMEAgVCeBMKF6MWRDCRA==\",
            \"dev\": true
        },
        \"spdx-expression-parse\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/spdx-expression-parse/-/spdx-expression-parse-3.0.0.tgz\",
            \"integrity\": \"sha512-Yg6D3XpRD4kkOmTpdgbUiEJFKghJH03fiC1OPll5h/0sO6neh2jqRDVHOQ4o/LMea0tgCkbMgea5ip/e+MkWyg==\",
            \"dev\": true,
            \"requires\": {
                \"spdx-exceptions\": \"^2.1.0\",
                \"spdx-license-ids\": \"^3.0.0\"
            }
        },
        \"spdx-license-ids\": {
            \"version\": \"3.0.4\",
            \"resolved\": \"https://registry.npmjs.org/spdx-license-ids/-/spdx-license-ids-3.0.4.tgz\",
            \"integrity\": \"sha512-7j8LYJLeY/Yb6ACbQ7F76qy5jHkp0U6jgBfJsk97bwWlVUnUWsAgpyaCvo17h0/RQGnQ036tVDomiwoI4pDkQA==\",
            \"dev\": true
        },
        \"split-string\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/split-string/-/split-string-3.1.0.tgz\",
            \"integrity\": \"sha512-NzNVhJDYpwceVVii8/Hu6DKfD2G+NrQHlS/V/qgv763EYudVwEcMQNxd2lh+0VrUByXN/oJkl5grOhYWvQUYiw==\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^3.0.0\"
            }
        },
        \"stack-trace\": {
            \"version\": \"0.0.10\",
            \"resolved\": \"https://registry.npmjs.org/stack-trace/-/stack-trace-0.0.10.tgz\",
            \"integrity\": \"sha1-VHxws0fo0ytOEI6hoqFZ5f3eGcA=\",
            \"dev\": true
        },
        \"static-extend\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/static-extend/-/static-extend-0.1.2.tgz\",
            \"integrity\": \"sha1-YICcOcv/VTNyJv1eC1IPNB8ftcY=\",
            \"dev\": true,
            \"requires\": {
                \"define-property\": \"^0.2.5\",
                \"object-copy\": \"^0.1.0\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                }
            }
        },
        \"statuses\": {
            \"version\": \"1.3.1\",
            \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.3.1.tgz\",
            \"integrity\": \"sha1-+vUbnrdKrvOzrPStX2Gr8ky3uT4=\",
            \"dev\": true
        },
        \"stream-exhaust\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/stream-exhaust/-/stream-exhaust-1.0.2.tgz\",
            \"integrity\": \"sha512-b/qaq/GlBK5xaq1yrK9/zFcyRSTNxmcZwFLGSTG0mXgZl/4Z6GgiyYOXOvY7N3eEvFRAG1bkDRz5EPGSvPYQlw==\",
            \"dev\": true
        },
        \"stream-shift\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/stream-shift/-/stream-shift-1.0.0.tgz\",
            \"integrity\": \"sha1-1cdSgl5TZ+eG944Y5EXqIjoVWVI=\",
            \"dev\": true
        },
        \"stream-throttle\": {
            \"version\": \"0.1.3\",
            \"resolved\": \"https://registry.npmjs.org/stream-throttle/-/stream-throttle-0.1.3.tgz\",
            \"integrity\": \"sha1-rdV8jXzHOoFjDTHNVdOWHPr7qcM=\",
            \"dev\": true,
            \"requires\": {
                \"commander\": \"^2.2.0\",
                \"limiter\": \"^1.0.5\"
            }
        },
        \"string-width\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-1.0.2.tgz\",
            \"integrity\": \"sha1-EYvfW4zcUaKn5w0hHgfisLmxB9M=\",
            \"dev\": true,
            \"requires\": {
                \"code-point-at\": \"^1.0.0\",
                \"is-fullwidth-code-point\": \"^1.0.0\",
                \"strip-ansi\": \"^3.0.0\"
            }
        },
        \"string_decoder\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/string_decoder/-/string_decoder-1.1.1.tgz\",
            \"integrity\": \"sha512-n/ShnvDi6FHbbVfviro+WojiFzv+s8MPMHBczVePfUpDJLwoLT0ht1l4YwBCbi8pJAveEEdnkHyPyTP/mzRfwg==\",
            \"dev\": true,
            \"requires\": {
                \"safe-buffer\": \"~5.1.0\"
            }
        },
        \"strip-ansi\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-3.0.1.tgz\",
            \"integrity\": \"sha1-ajhfuIU9lS1f8F0Oiq+UJ43GPc8=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-regex\": \"^2.0.0\"
            }
        },
        \"strip-bom\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/strip-bom/-/strip-bom-2.0.0.tgz\",
            \"integrity\": \"sha1-YhmoVhZSBJHzV4i9vxRHqZx+aw4=\",
            \"dev\": true,
            \"requires\": {
                \"is-utf8\": \"^0.2.0\"
            }
        },
        \"supports-color\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-2.0.0.tgz\",
            \"integrity\": \"sha1-U10EXOa2Nj+kARcIRimZXp3zJMc=\",
            \"dev\": true
        },
        \"sver-compat\": {
            \"version\": \"1.5.0\",
            \"resolved\": \"https://registry.npmjs.org/sver-compat/-/sver-compat-1.5.0.tgz\",
            \"integrity\": \"sha1-PPh9/rTQe0o/FIJ7wYaz/QxkXNg=\",
            \"dev\": true,
            \"requires\": {
                \"es6-iterator\": \"^2.0.1\",
                \"es6-symbol\": \"^3.1.1\"
            }
        },
        \"symbol-observable\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/symbol-observable/-/symbol-observable-1.0.1.tgz\",
            \"integrity\": \"sha1-g0D8RwLDEi310iKI+IKD9RPT/dQ=\",
            \"dev\": true
        },
        \"tfunk\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/tfunk/-/tfunk-3.1.0.tgz\",
            \"integrity\": \"sha1-OORBT8ZJd9h6/apy+sttKfgve1s=\",
            \"dev\": true,
            \"requires\": {
                \"chalk\": \"^1.1.1\",
                \"object-path\": \"^0.9.0\"
            }
        },
        \"through2\": {
            \"version\": \"2.0.5\",
            \"resolved\": \"https://registry.npmjs.org/through2/-/through2-2.0.5.tgz\",
            \"integrity\": \"sha512-/mrRod8xqpA+IHSLyGCQ2s8SPHiCDEeQJSep1jqLYeEUClOFG2Qsh+4FU6G9VeqpZnGW/Su8LQGc4YKni5rYSQ==\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"~2.3.6\",
                \"xtend\": \"~4.0.1\"
            }
        },
        \"through2-filter\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/through2-filter/-/through2-filter-3.0.0.tgz\",
            \"integrity\": \"sha512-jaRjI2WxN3W1V8/FMZ9HKIBXixtiqs3SQSX4/YGIiP3gL6djW48VoZq9tDqeCWs3MT8YY5wb/zli8VW8snY1CA==\",
            \"dev\": true,
            \"requires\": {
                \"through2\": \"~2.0.0\",
                \"xtend\": \"~4.0.0\"
            }
        },
        \"time-stamp\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/time-stamp/-/time-stamp-1.1.0.tgz\",
            \"integrity\": \"sha1-dkpaEa9QVhkhsTPztE5hhofg9cM=\",
            \"dev\": true
        },
        \"to-absolute-glob\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/to-absolute-glob/-/to-absolute-glob-2.0.2.tgz\",
            \"integrity\": \"sha1-GGX0PZ50sIItufFFt4z/fQ98hJs=\",
            \"dev\": true,
            \"requires\": {
                \"is-absolute\": \"^1.0.0\",
                \"is-negated-glob\": \"^1.0.0\"
            }
        },
        \"to-array\": {
            \"version\": \"0.1.4\",
            \"resolved\": \"https://registry.npmjs.org/to-array/-/to-array-0.1.4.tgz\",
            \"integrity\": \"sha1-F+bBH3PdTz10zaek/zI46a2b+JA=\",
            \"dev\": true
        },
        \"to-object-path\": {
            \"version\": \"0.3.0\",
            \"resolved\": \"https://registry.npmjs.org/to-object-path/-/to-object-path-0.3.0.tgz\",
            \"integrity\": \"sha1-KXWIt7Dn4KwI4E5nL4XB9JmeF68=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"to-regex\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/to-regex/-/to-regex-3.0.2.tgz\",
            \"integrity\": \"sha512-FWtleNAtZ/Ki2qtqej2CXTOayOH9bHDQF+Q48VpWyDXjbYxA4Yz8iDB31zXOBUlOHHKidDbqGVrTUvQMPmBGBw==\",
            \"dev\": true,
            \"requires\": {
                \"define-property\": \"^2.0.2\",
                \"extend-shallow\": \"^3.0.2\",
                \"regex-not\": \"^1.0.2\",
                \"safe-regex\": \"^1.1.0\"
            }
        },
        \"to-regex-range\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-2.1.1.tgz\",
            \"integrity\": \"sha1-fIDBe53+vlmeJzZ+DU3VWQFB2zg=\",
            \"dev\": true,
            \"requires\": {
                \"is-number\": \"^3.0.0\",
                \"repeat-string\": \"^1.6.1\"
            }
        },
        \"to-through\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/to-through/-/to-through-2.0.0.tgz\",
            \"integrity\": \"sha1-/JKtq6ByZHvAtn1rA2ZKoZUJOvY=\",
            \"dev\": true,
            \"requires\": {
                \"through2\": \"^2.0.3\"
            }
        },
        \"toidentifier\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/toidentifier/-/toidentifier-1.0.0.tgz\",
            \"integrity\": \"sha512-yaOH/Pk/VEhBWWTlhI+qXxDFXlejDGcQipMlyxda9nthulaxLZUNcUqFxokp0vcYnvteJln5FNQDRrxj3YcbVw==\",
            \"dev\": true
        },
        \"typedarray\": {
            \"version\": \"0.0.6\",
            \"resolved\": \"https://registry.npmjs.org/typedarray/-/typedarray-0.0.6.tgz\",
            \"integrity\": \"sha1-hnrHTjhkGHsdPUfZlqeOxciDB3c=\",
            \"dev\": true
        },
        \"ua-parser-js\": {
            \"version\": \"0.7.17\",
            \"resolved\": \"https://registry.npmjs.org/ua-parser-js/-/ua-parser-js-0.7.17.tgz\",
            \"integrity\": \"sha512-uRdSdu1oA1rncCQL7sCj8vSyZkgtL7faaw9Tc9rZ3mGgraQ7+Pdx7w5mnOSF3gw9ZNG6oc+KXfkon3bKuROm0g==\",
            \"dev\": true
        },
        \"ultron\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ultron/-/ultron-1.1.1.tgz\",
            \"integrity\": \"sha512-UIEXBNeYmKptWH6z8ZnqTeS8fV74zG0/eRU9VGkpzz+LIJNs8W/zM/L+7ctCkRrgbNnnR0xxw4bKOr0cW0N0Og==\",
            \"dev\": true
        },
        \"unc-path-regex\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/unc-path-regex/-/unc-path-regex-0.1.2.tgz\",
            \"integrity\": \"sha1-5z3T17DXxe2G+6xrCufYxqadUPo=\",
            \"dev\": true
        },
        \"undertaker\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/undertaker/-/undertaker-1.2.1.tgz\",
            \"integrity\": \"sha512-71WxIzDkgYk9ZS+spIB8iZXchFhAdEo2YU8xYqBYJ39DIUIqziK78ftm26eecoIY49X0J2MLhG4hr18Yp6/CMA==\",
            \"dev\": true,
            \"requires\": {
                \"arr-flatten\": \"^1.0.1\",
                \"arr-map\": \"^2.0.0\",
                \"bach\": \"^1.0.0\",
                \"collection-map\": \"^1.0.0\",
                \"es6-weak-map\": \"^2.0.1\",
                \"last-run\": \"^1.1.0\",
                \"object.defaults\": \"^1.0.0\",
                \"object.reduce\": \"^1.0.0\",
                \"undertaker-registry\": \"^1.0.0\"
            }
        },
        \"undertaker-registry\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/undertaker-registry/-/undertaker-registry-1.0.1.tgz\",
            \"integrity\": \"sha1-XkvaMI5KiirlhPm5pDWaSZglzFA=\",
            \"dev\": true
        },
        \"union-value\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/union-value/-/union-value-1.0.0.tgz\",
            \"integrity\": \"sha1-XHHDTLW61dzr4+oM0IIHulqhrqQ=\",
            \"dev\": true,
            \"requires\": {
                \"arr-union\": \"^3.1.0\",
                \"get-value\": \"^2.0.6\",
                \"is-extendable\": \"^0.1.1\",
                \"set-value\": \"^0.4.3\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                },
                \"set-value\": {
                    \"version\": \"0.4.3\",
                    \"resolved\": \"https://registry.npmjs.org/set-value/-/set-value-0.4.3.tgz\",
                    \"integrity\": \"sha1-fbCPnT0i3H945Trzw79GZuzfzPE=\",
                    \"dev\": true,
                    \"requires\": {
                        \"extend-shallow\": \"^2.0.1\",
                        \"is-extendable\": \"^0.1.1\",
                        \"is-plain-object\": \"^2.0.1\",
                        \"to-object-path\": \"^0.3.0\"
                    }
                }
            }
        },
        \"unique-stream\": {
            \"version\": \"2.3.1\",
            \"resolved\": \"https://registry.npmjs.org/unique-stream/-/unique-stream-2.3.1.tgz\",
            \"integrity\": \"sha512-2nY4TnBE70yoxHkDli7DMazpWiP7xMdCYqU2nBRO0UB+ZpEkGsSija7MvmvnZFUeC+mrgiUfcHSr3LmRFIg4+A==\",
            \"dev\": true,
            \"requires\": {
                \"json-stable-stringify-without-jsonify\": \"^1.0.1\",
                \"through2-filter\": \"^3.0.0\"
            }
        },
        \"universalify\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/universalify/-/universalify-0.1.2.tgz\",
            \"integrity\": \"sha512-rBJeI5CXAlmy1pV+617WB9J63U6XcazHHF2f2dbJix4XzpUF0RS3Zbj0FGIOCAva5P/d/GBOYaACQ1w+0azUkg==\",
            \"dev\": true
        },
        \"unpipe\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/unpipe/-/unpipe-1.0.0.tgz\",
            \"integrity\": \"sha1-sr9O6FFKrmFltIF4KdIbLvSZBOw=\",
            \"dev\": true
        },
        \"unset-value\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/unset-value/-/unset-value-1.0.0.tgz\",
            \"integrity\": \"sha1-g3aHP30jNRef+x5vw6jtDfyKtVk=\",
            \"dev\": true,
            \"requires\": {
                \"has-value\": \"^0.3.1\",
                \"isobject\": \"^3.0.0\"
            },
            \"dependencies\": {
                \"has-value\": {
                    \"version\": \"0.3.1\",
                    \"resolved\": \"https://registry.npmjs.org/has-value/-/has-value-0.3.1.tgz\",
                    \"integrity\": \"sha1-ex9YutpiyoJ+wKIHgCVlSEWZXh8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"get-value\": \"^2.0.3\",
                        \"has-values\": \"^0.1.4\",
                        \"isobject\": \"^2.0.0\"
                    },
                    \"dependencies\": {
                        \"isobject\": {
                            \"version\": \"2.1.0\",
                            \"resolved\": \"https://registry.npmjs.org/isobject/-/isobject-2.1.0.tgz\",
                            \"integrity\": \"sha1-8GVWEJaj8dou9GJy+BXIQNh+DIk=\",
                            \"dev\": true,
                            \"requires\": {
                                \"isarray\": \"1.0.0\"
                            }
                        }
                    }
                },
                \"has-values\": {
                    \"version\": \"0.1.4\",
                    \"resolved\": \"https://registry.npmjs.org/has-values/-/has-values-0.1.4.tgz\",
                    \"integrity\": \"sha1-bWHeldkd/Km5oCCJrThL/49it3E=\",
                    \"dev\": true
                },
                \"isarray\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-1.0.0.tgz\",
                    \"integrity\": \"sha1-u5NdSFgsuhaMBoNJV6VKPgcSTxE=\",
                    \"dev\": true
                }
            }
        },
        \"upath\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/upath/-/upath-1.1.2.tgz\",
            \"integrity\": \"sha512-kXpym8nmDmlCBr7nKdIx8P2jNBa+pBpIUFRnKJ4dr8htyYGJFokkr2ZvERRtUN+9SY+JqXouNgUPtv6JQva/2Q==\",
            \"dev\": true
        },
        \"urix\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/urix/-/urix-0.1.0.tgz\",
            \"integrity\": \"sha1-2pN/emLiH+wf0Y1Js1wpNQZ6bHI=\",
            \"dev\": true
        },
        \"use\": {
            \"version\": \"3.1.1\",
            \"resolved\": \"https://registry.npmjs.org/use/-/use-3.1.1.tgz\",
            \"integrity\": \"sha512-cwESVXlO3url9YWlFW/TA9cshCEhtu7IKJ/p5soJ/gGpj7vbvFrAY/eIioQ6Dw23KjZhYgiIo8HOs1nQ2vr/oQ==\",
            \"dev\": true
        },
        \"util-deprecate\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/util-deprecate/-/util-deprecate-1.0.2.tgz\",
            \"integrity\": \"sha1-RQ1Nyfpw3nMnYvvS1KKJgUGaDM8=\",
            \"dev\": true
        },
        \"utils-merge\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/utils-merge/-/utils-merge-1.0.1.tgz\",
            \"integrity\": \"sha1-n5VxD1CiZ5R7LMwSR0HBAoQn5xM=\",
            \"dev\": true
        },
        \"v8flags\": {
            \"version\": \"3.1.2\",
            \"resolved\": \"https://registry.npmjs.org/v8flags/-/v8flags-3.1.2.tgz\",
            \"integrity\": \"sha512-MtivA7GF24yMPte9Rp/BWGCYQNaUj86zeYxV/x2RRJMKagImbbv3u8iJC57lNhWLPcGLJmHcHmFWkNsplbbLWw==\",
            \"dev\": true,
            \"requires\": {
                \"homedir-polyfill\": \"^1.0.1\"
            }
        },
        \"validate-npm-package-license\": {
            \"version\": \"3.0.4\",
            \"resolved\": \"https://registry.npmjs.org/validate-npm-package-license/-/validate-npm-package-license-3.0.4.tgz\",
            \"integrity\": \"sha512-DpKm2Ui/xN7/HQKCtpZxoRWBhZ9Z0kqtygG8XCgNQ8ZlDnxuQmWhj566j8fN4Cu3/JmbhsDo7fcAJq4s9h27Ew==\",
            \"dev\": true,
            \"requires\": {
                \"spdx-correct\": \"^3.0.0\",
                \"spdx-expression-parse\": \"^3.0.0\"
            }
        },
        \"value-or-function\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/value-or-function/-/value-or-function-3.0.0.tgz\",
            \"integrity\": \"sha1-HCQ6ULWVwb5Up1S/7OhWO5/42BM=\",
            \"dev\": true
        },
        \"vinyl\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/vinyl/-/vinyl-2.2.0.tgz\",
            \"integrity\": \"sha512-MBH+yP0kC/GQ5GwBqrTPTzEfiiLjta7hTtvQtbxBgTeSXsmKQRQecjibMbxIXzVT3Y9KJK+drOz1/k+vsu8Nkg==\",
            \"dev\": true,
            \"requires\": {
                \"clone\": \"^2.1.1\",
                \"clone-buffer\": \"^1.0.0\",
                \"clone-stats\": \"^1.0.0\",
                \"cloneable-readable\": \"^1.0.0\",
                \"remove-trailing-separator\": \"^1.0.1\",
                \"replace-ext\": \"^1.0.0\"
            }
        },
        \"vinyl-fs\": {
            \"version\": \"3.0.3\",
            \"resolved\": \"https://registry.npmjs.org/vinyl-fs/-/vinyl-fs-3.0.3.tgz\",
            \"integrity\": \"sha512-vIu34EkyNyJxmP0jscNzWBSygh7VWhqun6RmqVfXePrOwi9lhvRs//dOaGOTRUQr4tx7/zd26Tk5WeSVZitgng==\",
            \"dev\": true,
            \"requires\": {
                \"fs-mkdirp-stream\": \"^1.0.0\",
                \"glob-stream\": \"^6.1.0\",
                \"graceful-fs\": \"^4.0.0\",
                \"is-valid-glob\": \"^1.0.0\",
                \"lazystream\": \"^1.0.0\",
                \"lead\": \"^1.0.0\",
                \"object.assign\": \"^4.0.4\",
                \"pumpify\": \"^1.3.5\",
                \"readable-stream\": \"^2.3.3\",
                \"remove-bom-buffer\": \"^3.0.0\",
                \"remove-bom-stream\": \"^1.2.0\",
                \"resolve-options\": \"^1.1.0\",
                \"through2\": \"^2.0.0\",
                \"to-through\": \"^2.0.0\",
                \"value-or-function\": \"^3.0.0\",
                \"vinyl\": \"^2.0.0\",
                \"vinyl-sourcemap\": \"^1.1.0\"
            }
        },
        \"vinyl-sourcemap\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/vinyl-sourcemap/-/vinyl-sourcemap-1.1.0.tgz\",
            \"integrity\": \"sha1-kqgAWTo4cDqM2xHYswCtS+Y7PhY=\",
            \"dev\": true,
            \"requires\": {
                \"append-buffer\": \"^1.0.2\",
                \"convert-source-map\": \"^1.5.0\",
                \"graceful-fs\": \"^4.1.6\",
                \"normalize-path\": \"^2.1.1\",
                \"now-and-later\": \"^2.0.0\",
                \"remove-bom-buffer\": \"^3.0.0\",
                \"vinyl\": \"^2.0.0\"
            },
            \"dependencies\": {
                \"normalize-path\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-2.1.1.tgz\",
                    \"integrity\": \"sha1-GrKLVW4Zg2Oowab35vogE3/mrtk=\",
                    \"dev\": true,
                    \"requires\": {
                        \"remove-trailing-separator\": \"^1.0.1\"
                    }
                }
            }
        },
        \"which\": {
            \"version\": \"1.3.1\",
            \"resolved\": \"https://registry.npmjs.org/which/-/which-1.3.1.tgz\",
            \"integrity\": \"sha512-HxJdYWq1MTIQbJ3nw0cqssHoTNU267KlrDuGZ1WYlxDStUtKUhOaJmh112/TZmHxxUfuJqPXSOm7tDyas0OSIQ==\",
            \"dev\": true,
            \"requires\": {
                \"isexe\": \"^2.0.0\"
            }
        },
        \"which-module\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/which-module/-/which-module-1.0.0.tgz\",
            \"integrity\": \"sha1-u6Y8qGGUiZT/MHc2CJ47lgJsKk8=\",
            \"dev\": true
        },
        \"window-size\": {
            \"version\": \"0.2.0\",
            \"resolved\": \"https://registry.npmjs.org/window-size/-/window-size-0.2.0.tgz\",
            \"integrity\": \"sha1-tDFbtCFKPXBY6+7okuE/ok2YsHU=\",
            \"dev\": true
        },
        \"wrap-ansi\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-2.1.0.tgz\",
            \"integrity\": \"sha1-2Pw9KE3QV5T+hJc8rs3Rz4JP3YU=\",
            \"dev\": true,
            \"requires\": {
                \"string-width\": \"^1.0.1\",
                \"strip-ansi\": \"^3.0.1\"
            }
        },
        \"wrappy\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/wrappy/-/wrappy-1.0.2.tgz\",
            \"integrity\": \"sha1-tSQ9jz7BqjXxNkYFvA0QNuMKtp8=\",
            \"dev\": true
        },
        \"ws\": {
            \"version\": \"6.1.4\",
            \"resolved\": \"https://registry.npmjs.org/ws/-/ws-6.1.4.tgz\",
            \"integrity\": \"sha512-eqZfL+NE/YQc1/ZynhojeV8q+H050oR8AZ2uIev7RU10svA9ZnJUddHcOUZTJLinZ9yEfdA2kSATS2qZK5fhJA==\",
            \"dev\": true,
            \"requires\": {
                \"async-limiter\": \"~1.0.0\"
            }
        },
        \"xmlhttprequest-ssl\": {
            \"version\": \"1.5.5\",
            \"resolved\": \"https://registry.npmjs.org/xmlhttprequest-ssl/-/xmlhttprequest-ssl-1.5.5.tgz\",
            \"integrity\": \"sha1-wodrBhaKrcQOV9l+gRkayPQ5iz4=\",
            \"dev\": true
        },
        \"xtend\": {
            \"version\": \"4.0.1\",
            \"resolved\": \"https://registry.npmjs.org/xtend/-/xtend-4.0.1.tgz\",
            \"integrity\": \"sha1-pcbVMr5lbiPbgg77lDofBJmNY68=\",
            \"dev\": true
        },
        \"y18n\": {
            \"version\": \"3.2.1\",
            \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-3.2.1.tgz\",
            \"integrity\": \"sha1-bRX7qITAhnnA136I53WegR4H+kE=\",
            \"dev\": true
        },
        \"yargs\": {
            \"version\": \"6.4.0\",
            \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-6.4.0.tgz\",
            \"integrity\": \"sha1-gW4ahm1VmMzzTlWW3c4i2S2kkNQ=\",
            \"dev\": true,
            \"requires\": {
                \"camelcase\": \"^3.0.0\",
                \"cliui\": \"^3.2.0\",
                \"decamelize\": \"^1.1.1\",
                \"get-caller-file\": \"^1.0.1\",
                \"os-locale\": \"^1.4.0\",
                \"read-pkg-up\": \"^1.0.1\",
                \"require-directory\": \"^2.1.1\",
                \"require-main-filename\": \"^1.0.1\",
                \"set-blocking\": \"^2.0.0\",
                \"string-width\": \"^1.0.2\",
                \"which-module\": \"^1.0.0\",
                \"window-size\": \"^0.2.0\",
                \"y18n\": \"^3.2.1\",
                \"yargs-parser\": \"^4.1.0\"
            }
        },
        \"yargs-parser\": {
            \"version\": \"4.2.1\",
            \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-4.2.1.tgz\",
            \"integrity\": \"sha1-KczqwNxPA8bIe0qfIX3RjJ90hxw=\",
            \"dev\": true,
            \"requires\": {
                \"camelcase\": \"^3.0.0\"
            }
        },
        \"yeast\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/yeast/-/yeast-0.1.2.tgz\",
            \"integrity\": \"sha1-AI4G2AlDIMNy28L47XagymyKxBk=\",
            \"dev\": true
        }
    }
}
", "modern-business/package-lock.json", "C:\\wamp64\\www\\OCR-P6\\templates\\modern-business\\package-lock.json");
    }
}
