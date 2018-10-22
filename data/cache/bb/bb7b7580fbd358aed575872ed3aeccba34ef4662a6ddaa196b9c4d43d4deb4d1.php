<?php

/* default/template/information/contact.twig */
class __TwigTemplate_62ee2951af1c34a9239365ae449c6965ee265a6df6f6f86e0f87b10dd7321909 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", array());
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">
    ";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <h3>";
        // line 19
        echo ($context["text_location"] ?? null);
        echo "</h3>
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            ";
        // line 23
        if (($context["image"] ?? null)) {
            // line 24
            echo "              <div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\"/></div>
            ";
        }
        // line 26
        echo "            <div class=\"col-sm-3\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong>
              <br/>
              <address>
                ";
        // line 29
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 31
        if (($context["geocode"] ?? null)) {
            // line 32
            echo "                <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 34
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 35
        echo ($context["text_telephone"] ?? null);
        echo "</strong>
              <br>
              ";
        // line 37
        echo ($context["telephone"] ?? null);
        echo "
              <br/>
              <br/>
              ";
        // line 40
        if (($context["fax"] ?? null)) {
            // line 41
            echo "                <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong>
                <br>
                ";
            // line 43
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 45
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 47
        if (($context["open"] ?? null)) {
            // line 48
            echo "                <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong>
                <br/>
                ";
            // line 50
            echo ($context["open"] ?? null);
            echo "
                <br/>
                <br/>
              ";
        }
        // line 54
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 55
            echo "                <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong>
                <br/>
                ";
            // line 57
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 59
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 63
        if (($context["locations"] ?? null)) {
            // line 64
            echo "        <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
        <div class=\"panel-group\" id=\"accordion\">
          ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 67
                echo "            <div class=\"card\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", array());
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", array());
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
              </div>
              <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", array());
                echo "\">
                <div class=\"card-body\">
                  <div class=\"row\">
                    ";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", array())) {
                    // line 75
                    echo "                      <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", array());
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", array());
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", array());
                    echo "\" class=\"img-thumbnail\"/></div>
                    ";
                }
                // line 77
                echo "                    <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", array());
                echo "</strong>
                      <br/>
                      <address>
                        ";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", array());
                echo "
                      </address>
                      ";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", array())) {
                    // line 83
                    echo "                        <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", array()));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                      ";
                }
                // line 85
                echo "                    </div>
                    <div class=\"col-sm-3\"><strong>";
                // line 86
                echo ($context["text_telephone"] ?? null);
                echo "</strong>
                      <br>
                      ";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", array());
                echo "
                      <br/>
                      <br/>
                      ";
                // line 91
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", array())) {
                    // line 92
                    echo "                        <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong>
                        <br>
                        ";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", array());
                    echo "
                      ";
                }
                // line 96
                echo "                    </div>
                    <div class=\"col-sm-3\">
                      ";
                // line 98
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", array())) {
                    // line 99
                    echo "                        <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong>
                        <br/>
                        ";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", array());
                    echo "
                        <br/>
                        <br/>
                      ";
                }
                // line 105
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", array())) {
                    // line 106
                    echo "                        <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong>
                        <br/>
                        ";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", array());
                    echo "
                      ";
                }
                // line 110
                echo "                    </div>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "        </div>
      ";
        }
        // line 118
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <fieldset>
          <legend>";
        // line 120
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 122
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 124
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
              ";
        // line 125
        if (($context["error_name"] ?? null)) {
            // line 126
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 128
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-email\">";
        // line 131
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 133
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              ";
        // line 134
        if (($context["error_email"] ?? null)) {
            // line 135
            echo "                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 137
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-enquiry\">";
        // line 140
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 142
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 143
        if (($context["error_enquiry"] ?? null)) {
            // line 144
            echo "                <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 146
        echo "            </div>
          </div>
          ";
        // line 148
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"float-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 152
        echo ($context["button_submit"] ?? null);
        echo "\"/>
          </div>
        </div>
      </form>
      ";
        // line 156
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 157
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 159
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 159,  426 => 157,  422 => 156,  415 => 152,  408 => 148,  404 => 146,  398 => 144,  396 => 143,  392 => 142,  387 => 140,  382 => 137,  376 => 135,  374 => 134,  370 => 133,  365 => 131,  360 => 128,  354 => 126,  352 => 125,  348 => 124,  343 => 122,  338 => 120,  332 => 118,  328 => 116,  317 => 110,  312 => 108,  306 => 106,  303 => 105,  296 => 101,  290 => 99,  288 => 98,  284 => 96,  279 => 94,  273 => 92,  271 => 91,  265 => 88,  260 => 86,  257 => 85,  247 => 83,  245 => 82,  240 => 80,  233 => 77,  223 => 75,  221 => 74,  215 => 71,  208 => 69,  204 => 67,  200 => 66,  194 => 64,  192 => 63,  186 => 59,  181 => 57,  175 => 55,  172 => 54,  165 => 50,  159 => 48,  157 => 47,  153 => 45,  148 => 43,  142 => 41,  140 => 40,  134 => 37,  129 => 35,  126 => 34,  116 => 32,  114 => 31,  109 => 29,  102 => 26,  92 => 24,  90 => 23,  83 => 19,  79 => 18,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  52 => 10,  48 => 9,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/information/contact.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/information/contact.twig");
    }
}
