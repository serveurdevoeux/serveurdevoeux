<?php

/* SRVDVServerBundle:Resetting:request.html.twig */
class __TwigTemplate_f4127c6f9bfcef38d0f91a16d422669cace86b2407aaa5ce5f999e4b9d3f5e2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "SRVDVServerBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:Connexion:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Resetting:request_content.html.twig", "SRVDVServerBundle:Resetting:request.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SRVDVServerBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/request.html.twig");
    }
}
