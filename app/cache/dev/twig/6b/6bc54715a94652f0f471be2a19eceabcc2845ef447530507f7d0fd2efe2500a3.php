<?php

/* SRVDVServerBundle:admin:footerAdmin.html.twig */
class __TwigTemplate_4eef4b3d9bd0860abc5b35e1b6a938965237b8f02d4cd895f3d33b4654cf1eef extends Twig_Template
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
        $__internal_e5c11d73e63d04493e8e0d87a032bbb241be3b3b2d3c689f82d5bd221135e94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c11d73e63d04493e8e0d87a032bbb241be3b3b2d3c689f82d5bd221135e94c->enter($__internal_e5c11d73e63d04493e8e0d87a032bbb241be3b3b2d3c689f82d5bd221135e94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:footerAdmin.html.twig"));

        // line 1
        echo "</br></br>
<footer>
  <p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>
</body>
</html>";
        
        $__internal_e5c11d73e63d04493e8e0d87a032bbb241be3b3b2d3c689f82d5bd221135e94c->leave($__internal_e5c11d73e63d04493e8e0d87a032bbb241be3b3b2d3c689f82d5bd221135e94c_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:footerAdmin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("</br></br>
<footer>
  <p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>
</body>
</html>", "SRVDVServerBundle:admin:footerAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/footerAdmin.html.twig");
    }
}
