<?php

/* @SRVDVServer/enseignant/MenuEnseignant.html.twig */
class __TwigTemplate_30829c66f7b5a183e3c3efb36dc794de4a5b8da5c10b18cc18b9167c24a57837 extends Twig_Template
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
        $__internal_7b380069171360c6888057aa55ed5025209691944f9b20528d63ff80ae661d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b380069171360c6888057aa55ed5025209691944f9b20528d63ff80ae661d8a->enter($__internal_7b380069171360c6888057aa55ed5025209691944f9b20528d63ff80ae661d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/enseignant/MenuEnseignant.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <title>SRV-Voeux-Enseignant</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/runtime_favico.ico"), "html", null, true);
        echo "\">
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/home.css"), "html", null, true);
        echo "\"/>
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\"/>
    <link rel=stylesheet type=\"text/css\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\"/>
    <link rel=stylesheet type=\"text/css\" href=\"https://cdn.datatables.net/1.10.13/css/dataTables.jqueryui.min.css\"/>
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/dataTables.jqueryui.min.js\"></script>

    <style>

      .centreVerticalement {
        display: inline-block;
        vertical-align: top;
        float: none;

      }


    </style>

  </head>
  <body  >

    ";
        // line 30
        if (array_key_exists("etatConnect", $context)) {
            // line 31
            echo "      ";
            $context["etat"] = (isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect"));
            // line 32
            echo "    ";
        } else {
            // line 33
            echo "      ";
            $context["etat"] = 999;
            // line 34
            echo "    ";
        }
        // line 35
        echo "

    <nav class=\"navbar navbar-default\" role=\"navigation\">
      <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-megadropdown-tabs\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a  href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img class=\"image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/SVEDI-small.png"), "html", null, true);
        echo "\"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"navbar-collapse style= collapse in\" id=\"bs-megadropdown-tabs\" style=\"
             padding-left: 0px;
             \">
          <ul class=\"nav navbar-nav\">
            <li  ";
        // line 55
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "Accueil")) {
            echo " class=\"active\"   ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> </br> Accueil</a></li>
            <li  ";
        // line 56
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "Reserves")) {
            echo " class=\"active\"   ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reservations");
        echo "\"><span class=\"glyphicon glyphicon-link\"></span> </br> Réservations </a></li>
            <li ";
        // line 57
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "users")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeUsers");
        echo "\"> <span class=\"glyphicon glyphicon-list\"></span>  </br>Utilisateurs</a></li>
            <li ";
        // line 58
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "Filieres")) {
            echo " class=\"active\"   ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_ListeFilieres");
        echo "\"><span class=\"glyphicon glyphicon-folder-close\"></span> </br>Liste des filières</a></li>       

          </ul>

          <ul class=\"nav navbar-nav navbar-right\">

            ";
        // line 64
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "  
              <li  ";
            // line 65
            if ((((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) >= 20) && ((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) < 30))) {
                echo " class=\"active\"  ";
            }
            echo " ><a  href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" ><span class=\"glyphicon glyphicon-user\"></span>  </br>  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "  (";
            echo twig_escape_filter($this->env, twig_round((isset($context["somme"]) ? $context["somme"] : $this->getContext($context, "somme"))), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombreHeurTheo", array()), "html", null, true);
            echo ")  </a></li>

              <li><a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                  <span class=\"glyphicon glyphicon-log-out\"></span>
                  </br>
                  ";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "

                ";
        } else {
            // line 73
            echo "


                  <li><a href=\"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                      <span class=\"glyphicon glyphicon-log-in\"></span>   </br>
                      ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "

                    ";
        }
        // line 81
        echo "                  </a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    ";
        // line 87
        if ((((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) >= 20) && ((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) < 30))) {
            // line 88
            echo "      <div class=\"row\">
        <div class=\"btn-group btn-group-justified\">

          <div class=\"btn-group\" onclick=\"self.location.href = '";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "'\" >
            <button  type=\"button\"  ";
            // line 92
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 21)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo " >

              <p > <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Mon Profile</p>
            </button>
          </div>

          <div class=\"btn-group\" onclick=\"self.location.href = '";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "'\">
            <button type=\"button\" ";
            // line 99
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 22)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">

              <p><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span> Mot De Passe</p>
            </button>
          </div>
          <div class=\"btn-group\" onclick=\"self.location.href = '";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ChoixFiliereEns_enseignant");
            echo "'\">
            <button type=\"button\" ";
            // line 105
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 20)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">

              <p><span class=\"glyphicon glyphicon-star\"></span> Résérvation</p>
            </button>
          </div>

          <div class=\"btn-group\" onclick=\"self.location.href = '";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Liste_ReservationProf", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "'\">
            <button type=\"button\" ";
            // line 112
            if (((isset($context["etatConnect"]) ? $context["etatConnect"] : $this->getContext($context, "etatConnect")) == 23)) {
                echo " class=\"btn btn-nav active\" ";
            } else {
                echo " class=\"btn btn-nav\" ";
            }
            echo ">

              <p><span class=\"glyphicon glyphicon-eye-open\"></span> Liste Résérvations</p>
            </button>
          </div>
        </div>
      </div>
    ";
        }
        // line 119
        echo " 
  </div>      
  <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\">

  </script>

";
        
        $__internal_7b380069171360c6888057aa55ed5025209691944f9b20528d63ff80ae661d8a->leave($__internal_7b380069171360c6888057aa55ed5025209691944f9b20528d63ff80ae661d8a_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/enseignant/MenuEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 121,  276 => 119,  261 => 112,  257 => 111,  244 => 105,  240 => 104,  228 => 99,  224 => 98,  211 => 92,  207 => 91,  202 => 88,  200 => 87,  192 => 81,  186 => 78,  181 => 76,  176 => 73,  170 => 70,  164 => 67,  147 => 65,  143 => 64,  130 => 58,  122 => 57,  114 => 56,  106 => 55,  93 => 47,  79 => 35,  76 => 34,  73 => 33,  70 => 32,  67 => 31,  65 => 30,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <title>SRV-Voeux-Enseignant</title>
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/runtime_favico.ico')}}\">
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\"/>
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('assets/css/home.css') }}\"/>
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('assets/css/menu.css') }}\"/>
    <link rel=stylesheet type=\"text/css\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\"/>
    <link rel=stylesheet type=\"text/css\" href=\"https://cdn.datatables.net/1.10.13/css/dataTables.jqueryui.min.css\"/>
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/dataTables.jqueryui.min.js\"></script>

    <style>

      .centreVerticalement {
        display: inline-block;
        vertical-align: top;
        float: none;

      }


    </style>

  </head>
  <body  >

    {% if etatConnect is defined %}
      {% set etat = etatConnect %}
    {% else %}
      {% set etat = 999 %}
    {% endif %}


    <nav class=\"navbar navbar-default\" role=\"navigation\">
      <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-megadropdown-tabs\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a  href=\"{{ path('home')}}\"><img class=\"image\" src=\"{{ asset ('assets/images/SVEDI-small.png') }}\"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"navbar-collapse style= collapse in\" id=\"bs-megadropdown-tabs\" style=\"
             padding-left: 0px;
             \">
          <ul class=\"nav navbar-nav\">
            <li  {% if etat == 'Accueil' %} class=\"active\"   {% endif %} ><a href=\"{{ path('home')}}\"><span class=\"glyphicon glyphicon-home\"></span> </br> Accueil</a></li>
            <li  {% if etat == 'Reserves' %} class=\"active\"   {% endif %} ><a href=\"{{ path('Reservations')}}\"><span class=\"glyphicon glyphicon-link\"></span> </br> Réservations </a></li>
            <li {% if etat == 'users' %} class=\"active\"   {% endif %}><a href=\"{{ path('home_ListeUsers')}}\"> <span class=\"glyphicon glyphicon-list\"></span>  </br>Utilisateurs</a></li>
            <li {% if etat == 'Filieres' %} class=\"active\"   {% endif %}><a href=\"{{ path('home_ListeFilieres')}}\"><span class=\"glyphicon glyphicon-folder-close\"></span> </br>Liste des filières</a></li>       

          </ul>

          <ul class=\"nav navbar-nav navbar-right\">

            {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}  
              <li  {% if etatConnect >= 20 and  etatConnect < 30   %} class=\"active\"  {% endif %} ><a  href=\" {{path('fos_user_profile_edit')}}\" ><span class=\"glyphicon glyphicon-user\"></span>  </br>  {{ app.user.nom }} {{ app.user.prenom }}  ({{ somme|round }}/{{ app.user.nombreHeurTheo }})  </a></li>

              <li><a href=\"{{ path('fos_user_security_logout') }}\">
                  <span class=\"glyphicon glyphicon-log-out\"></span>
                  </br>
                  {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}

                {% else %}



                  <li><a href=\"{{ path('fos_user_security_login') }}\">
                      <span class=\"glyphicon glyphicon-log-in\"></span>   </br>
                      {{ 'layout.login'|trans({}, 'FOSUserBundle') }}

                    {% endif %}
                  </a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    {% if etatConnect >= 20 and  etatConnect < 30   %}
      <div class=\"row\">
        <div class=\"btn-group btn-group-justified\">

          <div class=\"btn-group\" onclick=\"self.location.href = '{{path('fos_user_profile_edit')}}'\" >
            <button  type=\"button\"  {% if etatConnect == 21   %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %} >

              <p > <span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Mon Profile</p>
            </button>
          </div>

          <div class=\"btn-group\" onclick=\"self.location.href = '{{path('fos_user_change_password')}}'\">
            <button type=\"button\" {% if etatConnect == 22  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>

              <p><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span> Mot De Passe</p>
            </button>
          </div>
          <div class=\"btn-group\" onclick=\"self.location.href = '{{path('ChoixFiliereEns_enseignant')}}'\">
            <button type=\"button\" {% if etatConnect == 20  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>

              <p><span class=\"glyphicon glyphicon-star\"></span> Résérvation</p>
            </button>
          </div>

          <div class=\"btn-group\" onclick=\"self.location.href = '{{path('Liste_ReservationProf',{'id':app.user.id })}}'\">
            <button type=\"button\" {% if etatConnect == 23  %} class=\"btn btn-nav active\" {% else %} class=\"btn btn-nav\" {% endif %}>

              <p><span class=\"glyphicon glyphicon-eye-open\"></span> Liste Résérvations</p>
            </button>
          </div>
        </div>
      </div>
    {% endif %} 
  </div>      
  <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\">

  </script>

", "@SRVDVServer/enseignant/MenuEnseignant.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\enseignant\\MenuEnseignant.html.twig");
    }
}
