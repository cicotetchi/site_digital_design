<?php

/* projets.html.twig */
class __TwigTemplate_2c44f5645527beeb360183e8f9252ecf0049bef6734678b07a9a888d8ed48b47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projets.html.twig", 1);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02d2b8ad04dae62eb008ef4e806c5294202ae84d1848937a0beda9f11aa515bb = $this->env->getExtension("native_profiler");
        $__internal_02d2b8ad04dae62eb008ef4e806c5294202ae84d1848937a0beda9f11aa515bb->enter($__internal_02d2b8ad04dae62eb008ef4e806c5294202ae84d1848937a0beda9f11aa515bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02d2b8ad04dae62eb008ef4e806c5294202ae84d1848937a0beda9f11aa515bb->leave($__internal_02d2b8ad04dae62eb008ef4e806c5294202ae84d1848937a0beda9f11aa515bb_prof);

    }

    // line 3
    public function block_js($context, array $blocks = array())
    {
        $__internal_592523c18b311efcdc782b40eade23a419ac60be56bf3f91e497c634c1094737 = $this->env->getExtension("native_profiler");
        $__internal_592523c18b311efcdc782b40eade23a419ac60be56bf3f91e497c634c1094737->enter($__internal_592523c18b311efcdc782b40eade23a419ac60be56bf3f91e497c634c1094737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 4
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/flickity.pkgd.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_592523c18b311efcdc782b40eade23a419ac60be56bf3f91e497c634c1094737->leave($__internal_592523c18b311efcdc782b40eade23a419ac60be56bf3f91e497c634c1094737_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_3f7792689511cad86e6390dee8670b6f34a199cb7150ce13e1d6da1a0b7fadcb = $this->env->getExtension("native_profiler");
        $__internal_3f7792689511cad86e6390dee8670b6f34a199cb7150ce13e1d6da1a0b7fadcb->enter($__internal_3f7792689511cad86e6390dee8670b6f34a199cb7150ce13e1d6da1a0b7fadcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/flickity.css"), "html", null, true);
        echo "\">
";
        
        $__internal_3f7792689511cad86e6390dee8670b6f34a199cb7150ce13e1d6da1a0b7fadcb->leave($__internal_3f7792689511cad86e6390dee8670b6f34a199cb7150ce13e1d6da1a0b7fadcb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8741d4e0ec15873cb677175bbbd3c219f7508b0d87d7ece9b80a5e127a3429f3 = $this->env->getExtension("native_profiler");
        $__internal_8741d4e0ec15873cb677175bbbd3c219f7508b0d87d7ece9b80a5e127a3429f3->enter($__internal_8741d4e0ec15873cb677175bbbd3c219f7508b0d87d7ece9b80a5e127a3429f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
\t\t<section id=\"divProjet\">
\t\t\t<h1 class=\"centre\">Nos <b>projets</b>\tà venir</h1>
\t\t\t<div class=\"gallery js-flickity\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 17
            echo "          ";
            if (($this->getAttribute($context["projet"], "fini", array()) == 0)) {
                // line 18
                echo "           ";
                if ($this->getAttribute($context["projet"], "webPath", array())) {
                    // line 19
                    echo "      \t\t\t\t<div class=\"gallery-cell\">
      \t\t\t\t\t<img src=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["projet"], "webPath", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
                    echo "\"/>
      \t\t\t\t</div>
            ";
                } else {
                    // line 23
                    echo "              ";
                    // line 24
                    echo "            ";
                }
                // line 25
                echo "          ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t</div>
\t\t</section>

    <section id=\"divRea\">
  \t\t\t<div class=\"row\">
  \t\t\t\t<div class=\"col-md-12\">
  \t\t\t\t<h1 class=\"centre\">Nos <b>réalisations</b></h1>
\t\t\t\t\t<p>N'hésitez pas à cliquer sur les projets pour plus de détails.</p>
  \t\t\t\t<div class=\"grid\">
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 37
            echo "              ";
            if (($this->getAttribute($context["projet"], "fini", array()) == 1)) {
                // line 38
                echo "               ";
                if ($this->getAttribute($context["projet"], "webPath", array())) {
                    // line 39
                    echo "                 <figure class=\"effect-sarah\">
                   <img src=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["projet"], "webPath", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
                    echo "\"/>
                   <figcaption>
                     <h2>";
                    // line 42
                    echo $this->getAttribute($context["projet"], "titre", array());
                    echo "</h2>
                     <p>";
                    // line 43
                    echo $this->getAttribute($context["projet"], "description", array());
                    echo "</p>
                     <a href=\"\" data-toggle=\"modal\" data-target=\"#dialog";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
                    echo "\">Voir plus</a>
                   </figcaption>
                 </figure>
                ";
                } else {
                    // line 48
                    echo "                  ";
                    // line 49
                    echo "                ";
                }
                // line 50
                echo "              ";
            }
            // line 51
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "  \t\t\t\t\t</div>
  \t\t\t\t</div>
  \t\t\t</div>
  \t\t</section>

\t  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 58
            echo "\t\t<div class=\"modal fade\" id=\"dialog";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t    <div class=\"modal-content\">
\t\t      <div class=\"modal-header\">
\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t        <h3 class=\"modal-title\" id=\"myModalLabel\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
            echo " <span class=\"sous-titre\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "date", array()), "m/d/Y"), "html", null, true);
            echo "</span></h3>
\t\t      </div>
\t\t      <div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t";
            // line 69
            if ($this->getAttribute($context["projet"], "webPath", array())) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["projet"], "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<p>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["projet"], "langages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
                // line 79
                echo "\t\t\t\t\t\t\t\t\t<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["langage"], "langage", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t\t\t\t</div>
\t\t      </div>
\t\t      <div class=\"modal-footer\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\tProjet de type : ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "type", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t<div class=\"membres\">
\t\t\t\t\t\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["projet"], "membres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t<img src=\"
\t\t\t\t\t\t\t\t\t\t\t";
                // line 90
                if ($this->getAttribute($context["membre"], "webPath", array())) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["membre"], "webPath", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/logo.png"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "prenom", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "nom", array()), "html", null, true);
                echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "prenom", array()), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "nom", array()), "html", null, true);
                echo "\"/></a>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8741d4e0ec15873cb677175bbbd3c219f7508b0d87d7ece9b80a5e127a3429f3->leave($__internal_8741d4e0ec15873cb677175bbbd3c219f7508b0d87d7ece9b80a5e127a3429f3_prof);

    }

    public function getTemplateName()
    {
        return "projets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 97,  273 => 95,  267 => 93,  261 => 91,  259 => 90,  255 => 88,  251 => 87,  246 => 85,  240 => 81,  231 => 79,  227 => 78,  220 => 74,  216 => 72,  208 => 70,  206 => 69,  195 => 63,  186 => 58,  182 => 57,  175 => 52,  169 => 51,  166 => 50,  163 => 49,  161 => 48,  154 => 44,  150 => 43,  146 => 42,  139 => 40,  136 => 39,  133 => 38,  130 => 37,  126 => 36,  115 => 27,  109 => 26,  106 => 25,  103 => 24,  101 => 23,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  80 => 16,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block js %}*/
/* 	<script src="{{ asset('assets/js/flickity.pkgd.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block css %}*/
/* 	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flickity.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 		<section id="divProjet">*/
/* 			<h1 class="centre">Nos <b>projets</b>	à venir</h1>*/
/* 			<div class="gallery js-flickity">*/
/*         {% for projet in projets %}*/
/*           {% if projet.fini == 0 %}*/
/*            {% if projet.webPath %}*/
/*       				<div class="gallery-cell">*/
/*       					<img src="{{ asset(projet.webPath) }}" alt="{{ projet.titre }}"/>*/
/*       				</div>*/
/*             {% else %}*/
/*               {# lien youtube #}*/
/*             {% endif %}*/
/*           {% endif %}*/
/*         {% endfor %}*/
/* 			</div>*/
/* 		</section>*/
/* */
/*     <section id="divRea">*/
/*   			<div class="row">*/
/*   				<div class="col-md-12">*/
/*   				<h1 class="centre">Nos <b>réalisations</b></h1>*/
/* 					<p>N'hésitez pas à cliquer sur les projets pour plus de détails.</p>*/
/*   				<div class="grid">*/
/*             {% for projet in projets %}*/
/*               {% if projet.fini == 1 %}*/
/*                {% if projet.webPath %}*/
/*                  <figure class="effect-sarah">*/
/*                    <img src="{{ asset(projet.webPath) }}" alt="{{ projet.titre }}"/>*/
/*                    <figcaption>*/
/*                      <h2>{{ projet.titre|raw }}</h2>*/
/*                      <p>{{ projet.description|raw }}</p>*/
/*                      <a href="" data-toggle="modal" data-target="#dialog{{ projet.id }}">Voir plus</a>*/
/*                    </figcaption>*/
/*                  </figure>*/
/*                 {% else %}*/
/*                   {# lien youtube #}*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*   					</div>*/
/*   				</div>*/
/*   			</div>*/
/*   		</section>*/
/* */
/* 	  {% for projet in projets %}*/
/* 		<div class="modal fade" id="dialog{{ projet.id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/* 		  <div class="modal-dialog" role="document">*/
/* 		    <div class="modal-content">*/
/* 		      <div class="modal-header">*/
/* 		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 		        <h3 class="modal-title" id="myModalLabel">{{ projet.titre }} <span class="sous-titre">{{ projet.date|date("m/d/Y") }}</span></h3>*/
/* 		      </div>*/
/* 		      <div class="modal-body">*/
/* 						<div class="container-fluid">*/
/* 							<div class="row">*/
/* 								<div class="col-sm-4">*/
/* 									{% if projet.webPath %}*/
/* 										<img src="{{ asset(projet.webPath) }}" alt="{{ projet.titre }}"/>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								<div class="col-sm-8">*/
/* 									<p>{{ projet.description }}</p>*/
/* 								</div>*/
/* 							</div>*/
/* 							<br>*/
/* 							{% for langage in projet.langages %}*/
/* 									<span class="badge">{{ langage.langage }}</span>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 		      </div>*/
/* 		      <div class="modal-footer">*/
/* 						<div>*/
/* 							Projet de type : {{ projet.type }}*/
/* 							<div class="membres">*/
/* 								{% for membre in projet.membres %}*/
/* 									<a href="">*/
/* 										<img src="*/
/* 											{% if membre.webPath %}*/
/* 												{{ asset(membre.webPath) }}*/
/* 											{% else %}*/
/* 												{{ asset('assets/img/logo.png') }}*/
/* 											{% endif %}*/
/* 										" alt="{{ membre.prenom }}-{{ membre.nom }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ membre.prenom }}&nbsp;{{ membre.nom }}"/></a>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 		      </div>*/
/* 		    </div>*/
/* 		  </div>*/
/* 		</div>*/
/*   {% endfor %}*/
/* {% endblock %}*/
/* */
