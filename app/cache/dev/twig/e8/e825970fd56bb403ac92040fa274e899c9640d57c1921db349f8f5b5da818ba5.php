<?php

/* SRVDVServerBundle:admin:UsersAdmin.html.twig */
class __TwigTemplate_e319f2520b9e32e48f7f7630a92f7239fad4af465dbbf3b3b0c7b5a725b9c04a extends Twig_Template
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
        $__internal_582da219bc37a0b1774ba87eb78236f372a0b957fa13345195ea151fbfdb4af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582da219bc37a0b1774ba87eb78236f372a0b957fa13345195ea151fbfdb4af0->enter($__internal_582da219bc37a0b1774ba87eb78236f372a0b957fa13345195ea151fbfdb4af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:UsersAdmin.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        $this->loadTemplate("SRVDVServerBundle:admin:MenuAdmin.html.twig", "SRVDVServerBundle:admin:UsersAdmin.html.twig", 2)->display($context);
        // line 3
        echo "
<div id=\"nav\" >
    <div id=\"enseignant\" class=\"ouvert\">
        <h3>Administrateur</h3>
        <ul>
             <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li  ><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\"><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>  &nbsp; Mot de passe</a></li></br>
           <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Annee");
        echo "\"><span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer Année</a></li></br>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_Type");
        echo "\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
            <li class=\"active\"><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_utilisateur");
        echo "\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>\t</br>\t\t
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_filiere");
        echo "\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
            <li ><a  href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_form_typeens");
        echo "\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annee_suivante");
        echo "\"><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>&nbsp;  Basculer sur la nouvelle ann&eacute;e</a></li></br>  
        </ul>
    </div>
</div>\t

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-2 col-md-4 col-lg-2 centreVerticalement\">
        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Registration:register"));
        echo "
    </div>
        
    <div class=\" centreVerticalement\"> 
        <div class=\"table-responsive\">
            <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                <thead>
                    <tr><th>#</th><th>nom</th><th>prenom</th><th>username</th><th>mail</th><th>role</th><th>type</th><th>Heure Theo</th><th>Mod</th><th>Supp</th></tr>
                </thead>
                <tbody>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Users"] ?? $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 35
            echo "                        <tr>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "email", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["u"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 43
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                            </td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "type", array()), "libelle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nombreHeurTheo", array()), "html", null, true);
            echo "</td>
                            <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Users", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
                            <td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser(";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo ")\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
                        </tr>\t
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </tbody>
            </table> 
        </div>
    </div>
</div>

<script>
    \$(document).ready(function() {
        \$('#example').DataTable();
    } );
    function SupprimerUser(id){
        
        var rep=confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur' ) ;
        
        if(rep){
            window.location.href ='suppUsers/'+id;
        }
    }
</script>
";
        // line 71
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:UsersAdmin.html.twig", 71)->display($context);
        
        $__internal_582da219bc37a0b1774ba87eb78236f372a0b957fa13345195ea151fbfdb4af0->leave($__internal_582da219bc37a0b1774ba87eb78236f372a0b957fa13345195ea151fbfdb4af0_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:UsersAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 71,  152 => 52,  143 => 49,  139 => 48,  135 => 47,  131 => 46,  128 => 45,  119 => 43,  115 => 42,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  91 => 35,  87 => 34,  74 => 24,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
{% include \"SRVDVServerBundle:admin:MenuAdmin.html.twig\" %}

<div id=\"nav\" >
    <div id=\"enseignant\" class=\"ouvert\">
        <h3>Administrateur</h3>
        <ul>
             <li><a href=\"{{path('fos_user_profile_edit')}}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>  &nbsp; Mon profil</a></li></br>
            <li  ><a href=\"{{path('fos_user_change_password')}}\"><span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>  &nbsp; Mot de passe</a></li></br>
           <li><a href=\"{{path('list_form_Annee')}}\"><span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer Année</a></li></br>
            <li><a href=\"{{path('list_form_Type')}}\"><span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer statut</a></li></br>
            <li class=\"active\"><a href=\"{{path('list_form_utilisateur')}}\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span> &nbsp; G&eacute;rer Users</a></li>\t</br>\t\t
            <li><a href=\"{{path('list_form_filiere')}}\"><span class=\"glyphicon glyphicon-book\" aria-hidden=\"true\"></span>&nbsp;  G&eacute;rer fili&egrave;r</a></li></br>
            <li ><a  href=\"{{path('list_form_typeens')}}\"><span class=\"glyphicon glyphicon-asterisk\" aria-hidden=\"true\"></span>&nbsp;  Type Enseignement</a></li></br>
            <li><a href=\"{{path('annee_suivante')}}\"><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span>&nbsp;  Basculer sur la nouvelle ann&eacute;e</a></li></br>  
        </ul>
    </div>
</div>\t

<div id=\"content\">
    </br>
        
    <div class=\"col-xs-2 col-md-4 col-lg-2 centreVerticalement\">
        {{ render (controller(\"FOSUserBundle:Registration:register\")) }}
    </div>
        
    <div class=\" centreVerticalement\"> 
        <div class=\"table-responsive\">
            <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
                <thead>
                    <tr><th>#</th><th>nom</th><th>prenom</th><th>username</th><th>mail</th><th>role</th><th>type</th><th>Heure Theo</th><th>Mod</th><th>Supp</th></tr>
                </thead>
                <tbody>
                    {% for u in Users %}
                        <tr>
                            <td>{{ u.id }}</td>
                            <td>{{ u.nom }}</td>
                            <td>{{ u.prenom }}</td>
                            <td>{{ u.username }}</td>
                            <td>{{ u.email }}</td>
                            <td>
                                {% for role in u.roles %}
                                    {{ role }}
                                {% endfor %}
                            </td>
                            <td>{{ u.type.libelle }}</td>
                            <td>{{ u.nombreHeurTheo }}</td>
                            <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href ='{{path('Modifier_Users',{'id':u.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
                            <td><button type=\"button\" class=\"btn btn-warning\"  onclick=\"SupprimerUser({{ u.id }})\"><b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b></button></td>
                        </tr>\t
                    {% endfor %}
                </tbody>
            </table> 
        </div>
    </div>
</div>

<script>
    \$(document).ready(function() {
        \$('#example').DataTable();
    } );
    function SupprimerUser(id){
        
        var rep=confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur' ) ;
        
        if(rep){
            window.location.href ='suppUsers/'+id;
        }
    }
</script>
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:UsersAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/UsersAdmin.html.twig");
    }
}
