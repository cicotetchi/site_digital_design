<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_2e0dbb6ea8878692fb1bccb7674702a97b6423750d7884ca652ebe93e0444e11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2252bfff6a004893485bf16ebcc138d2b8172fa89059f2c08d4a1ee8a5ae243 = $this->env->getExtension("native_profiler");
        $__internal_c2252bfff6a004893485bf16ebcc138d2b8172fa89059f2c08d4a1ee8a5ae243->enter($__internal_c2252bfff6a004893485bf16ebcc138d2b8172fa89059f2c08d4a1ee8a5ae243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_c2252bfff6a004893485bf16ebcc138d2b8172fa89059f2c08d4a1ee8a5ae243->leave($__internal_c2252bfff6a004893485bf16ebcc138d2b8172fa89059f2c08d4a1ee8a5ae243_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_3a6116bff292b0657c61841e3fd3af807706b0c342dd38706c71f0afaf7598ab = $this->env->getExtension("native_profiler");
        $__internal_3a6116bff292b0657c61841e3fd3af807706b0c342dd38706c71f0afaf7598ab->enter($__internal_3a6116bff292b0657c61841e3fd3af807706b0c342dd38706c71f0afaf7598ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "

        ";
            // line 5
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()))) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        
        $__internal_3a6116bff292b0657c61841e3fd3af807706b0c342dd38706c71f0afaf7598ab->leave($__internal_3a6116bff292b0657c61841e3fd3af807706b0c342dd38706c71f0afaf7598ab_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  52 => 8,  46 => 6,  44 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block user_block %}*/
/*     {% if app.user %}*/
/*         {{ app.user }}*/
/* */
/*         {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.impersonating %}*/
/*             <a href="{{ url(sonata_user.impersonating.route, sonata_user.impersonating.parameters| merge({'_switch_user': '_exit'})) }}">(exit)</a>*/
/*         {% endif %}*/
/* */
/*         - <a href="{{ url('sonata_user_admin_security_logout') }}">{{ 'user_block_logout'|trans({}, 'SonataUserBundle') }}</a>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
