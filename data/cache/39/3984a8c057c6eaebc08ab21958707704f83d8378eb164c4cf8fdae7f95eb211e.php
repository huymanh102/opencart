<?php

/* default/template/extension/module/category.twig */
class __TwigTemplate_af6f9684a6a43f7c6eaa4f9f83f6857f9b3cfc40bea2c74af7c0cd503908df64 extends Twig_Template
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
        echo "<div class=\"list-group mb-3\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()) == ($context["category_id"] ?? null))) {
                echo " 
  <a href=\"";
                // line 4
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", array());
                echo "\" class=\"list-group-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", array());
                echo "</a> 
  ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", array())) {
                    // line 6
                    echo "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 7
                        echo "  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", array()) == ($context["child_id"] ?? null))) {
                            // line 8
                            echo "  <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", array());
                            echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", array());
                            echo "</a> 
  ";
                        } else {
                            // line 9
                            echo " 
  <a href=\"";
                            // line 10
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", array());
                            echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", array());
                            echo "</a>
  ";
                        }
                        // line 12
                        echo "  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "  ";
                }
                // line 14
                echo "  ";
            } else {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", array());
                echo "\" class=\"list-group-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", array());
                echo "</a>
  ";
            }
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 17,  88 => 16,  78 => 14,  75 => 13,  69 => 12,  62 => 10,  59 => 9,  51 => 8,  48 => 7,  43 => 6,  41 => 5,  35 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/extension/module/category.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/extension/module/category.twig");
    }
}
