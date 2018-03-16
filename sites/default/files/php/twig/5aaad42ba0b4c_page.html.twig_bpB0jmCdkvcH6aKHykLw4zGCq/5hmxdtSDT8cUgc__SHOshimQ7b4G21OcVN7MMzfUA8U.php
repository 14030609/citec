<?php

/* themes/d8_blog_theme/templates/page.html.twig */
class __TwigTemplate_278d424e43d8290f44598236e7fa0cbfdbed6ce209cc3baaf53f4d5170f0b7a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 83, "for" => 86);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 73
        echo "<div id=\"page-wrapper\">

  <header role=\"banner\" id=\"header\" class=\"clearfix\">
    <div class=\"container\">
\t";
        // line 77
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
\t
\t</div>
  </header>

  ";
        // line 83
        echo "  ";
        if (($context["slider"] ?? null)) {
            // line 84
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 87
                echo "          <li>
            <a href=\"";
                // line 88
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "url", array()), "html", null, true));
                echo "\"><img src=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "src", array()), "html", null, true));
                echo "\"></a>
            <p class=\"flex-caption\">";
                // line 89
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true));
                echo "</p>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "      </ul>
    </div>
  ";
        }
        // line 95
        echo "
  ";
        // line 96
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 97
            echo "    <div id=\"highlighted\"><div class=\"container\">
\t<div class=\"row\">";
            // line 98
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>
\t</div></div>
  ";
        }
        // line 101
        echo "\t<div class=\"container\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "</div>
  ";
        // line 103
        echo "  ";
        if ((($this->getAttribute(($context["page"] ?? null), "home_high1", array()) || $this->getAttribute(($context["page"] ?? null), "home_high2", array())) || $this->getAttribute(($context["page"] ?? null), "home_high3", array()))) {
            // line 104
            echo "    <div id=\"home-highlights\" class=\"row\">
      <div class=\"container\">";
            // line 105
            if ($this->getAttribute(($context["page"] ?? null), "home_high1", array())) {
                // line 106
                echo "        <div class=\"home-high-1 col-md-4\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_high1", array()), "html", null, true));
                echo "</div>
      ";
            }
            // line 108
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "home_high2", array())) {
                // line 109
                echo "        <div class=\"home-high-2 col-md-4\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_high2", array()), "html", null, true));
                echo "</div>
      ";
            }
            // line 111
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "home_high3", array())) {
                // line 112
                echo "        <div class=\"home-high-3 col-md-4\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_high3", array()), "html", null, true));
                echo "</div>
      ";
            }
            // line 113
            echo "</div>
    </div>
  ";
        }
        // line 116
        echo "
  <main id=\"main\" class=\"clearfix\">
    <div class=\"container\">
\t<div class=\"row\">";
        // line 119
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 120
            echo "      <div id=\"sidebar-first\" class=\"sidebar ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo "\" role=\"complementary\">
\t          ";
            // line 121
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
\t\t\t  \t";
            // line 122
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
            echo "

\t\t\t  </div>
       <!-- /#sidebar-first -->
    ";
        }
        // line 127
        echo "
    <div class=\"";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["conditionalStr"] ?? null), "html", null, true));
        echo "\" role=\"main\">
      ";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 130
            echo "        <div id=\"content_top\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "</div>
      ";
        }
        // line 132
        echo "
      ";
        // line 133
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "

    </div>";
        // line 136
        echo "
    ";
        // line 137
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 138
            echo "      <div id=\"sidebar-second\" class=\"sidebar ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo "\" role=\"complementary\">
        ";
            // line 139
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
      </div> <!-- /#sidebar-first -->
    ";
        }
        // line 141
        echo "</div>
</div>
  </main>

  ";
        // line 146
        echo "  ";
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 147
            echo "    <div id=\"footer-saran\" class=\"row\">
      <div id=\"footer-wrap\">
        ";
            // line 149
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 150
                echo "          <div class=\"footer-1 col-md-3\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 152
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 153
                echo "          <div class=\"footer-2 col-md-3\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 155
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 156
                echo "          <div class=\"footer-3 col-md-3\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 158
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) {
                // line 159
                echo "          <div class=\"footer-4 col-md-3\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
                echo "</div>
        ";
            }
            // line 161
            echo "      </div>
    </div>
    <div class=\"clear\"></div>
  ";
        }
        // line 165
        echo "
  <footer class=\"site-footer\">
      <div class=\"container\">
        ";
        // line 168
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 169
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 170
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
            ";
            // line 171
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
            ";
            // line 172
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
            ";
            // line 173
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 176
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
            // line 177
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 178
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 181
        echo "      </div>
    </footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/d8_blog_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 181,  298 => 178,  295 => 177,  292 => 176,  286 => 173,  282 => 172,  278 => 171,  274 => 170,  271 => 169,  269 => 168,  264 => 165,  258 => 161,  252 => 159,  249 => 158,  243 => 156,  240 => 155,  234 => 153,  231 => 152,  225 => 150,  223 => 149,  219 => 147,  216 => 146,  210 => 141,  204 => 139,  199 => 138,  197 => 137,  194 => 136,  189 => 133,  186 => 132,  180 => 130,  178 => 129,  174 => 128,  171 => 127,  163 => 122,  159 => 121,  154 => 120,  152 => 119,  147 => 116,  142 => 113,  136 => 112,  133 => 111,  127 => 109,  124 => 108,  118 => 106,  116 => 105,  113 => 104,  110 => 103,  105 => 101,  99 => 98,  96 => 97,  94 => 96,  91 => 95,  86 => 92,  77 => 89,  71 => 88,  68 => 87,  64 => 86,  60 => 84,  57 => 83,  49 => 77,  43 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/d8_blog_theme/templates/page.html.twig", "/var/www/html/citec/themes/d8_blog_theme/templates/page.html.twig");
    }
}
