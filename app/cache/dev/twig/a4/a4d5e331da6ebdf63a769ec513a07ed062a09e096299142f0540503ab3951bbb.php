<?php

/* SRVDVServerBundle:Registration:email.txt.twig */
class __TwigTemplate_d9fb642ef38579dd6542f4eacc9668ce91ac497e0fd5b3f1b1ca25429847bdfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caa987447683cc0f06ec377aee137c7daa975ed7864bc3475f2e2bfa5390822e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa987447683cc0f06ec377aee137c7daa975ed7864bc3475f2e2bfa5390822e->enter($__internal_caa987447683cc0f06ec377aee137c7daa975ed7864bc3475f2e2bfa5390822e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Registration:email.txt.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_caa987447683cc0f06ec377aee137c7daa975ed7864bc3475f2e2bfa5390822e->leave($__internal_caa987447683cc0f06ec377aee137c7daa975ed7864bc3475f2e2bfa5390822e_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b3505dcabd581d9d365f475546d2d5373af9885d9d490553e27d14b0ed8763ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3505dcabd581d9d365f475546d2d5373af9885d9d490553e27d14b0ed8763ec->enter($__internal_b3505dcabd581d9d365f475546d2d5373af9885d9d490553e27d14b0ed8763ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "    ";
        // line 5
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_b3505dcabd581d9d365f475546d2d5373af9885d9d490553e27d14b0ed8763ec->leave($__internal_b3505dcabd581d9d365f475546d2d5373af9885d9d490553e27d14b0ed8763ec_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6c5f1135935c98aae61291c91f695220f3c572bc19f54ece719c9d03a4b1cb42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5f1135935c98aae61291c91f695220f3c572bc19f54ece719c9d03a4b1cb42->enter($__internal_6c5f1135935c98aae61291c91f695220f3c572bc19f54ece719c9d03a4b1cb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo "    ";
        // line 10
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        
        $__internal_6c5f1135935c98aae61291c91f695220f3c572bc19f54ece719c9d03a4b1cb42->leave($__internal_6c5f1135935c98aae61291c91f695220f3c572bc19f54ece719c9d03a4b1cb42_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8699415554fa8b784e71de6795e15bce9461b9d73fec0d110e4efb62e9d3be08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8699415554fa8b784e71de6795e15bce9461b9d73fec0d110e4efb62e9d3be08->enter($__internal_8699415554fa8b784e71de6795e15bce9461b9d73fec0d110e4efb62e9d3be08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8699415554fa8b784e71de6795e15bce9461b9d73fec0d110e4efb62e9d3be08->leave($__internal_8699415554fa8b784e71de6795e15bce9461b9d73fec0d110e4efb62e9d3be08_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  65 => 10,  63 => 9,  57 => 8,  47 => 5,  45 => 4,  39 => 3,  32 => 13,  30 => 8,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block subject %}
    {% autoescape false %}
        {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
    {% endautoescape %}
{% endblock %}
{% block body_text %}
    {% autoescape false %}
        {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
    {% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "SRVDVServerBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/email.txt.twig");
    }
}
