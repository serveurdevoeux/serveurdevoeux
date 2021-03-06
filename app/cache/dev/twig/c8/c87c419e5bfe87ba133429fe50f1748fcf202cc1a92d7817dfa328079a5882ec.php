<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3df6a0372fc8469df5d249c9b5463c991443d374edf92a299ac2f76514ccf082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca2451233163e2f8fb0681129eeb6e6d11287c79faa329426c351af3ca2ffef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2451233163e2f8fb0681129eeb6e6d11287c79faa329426c351af3ca2ffef0->enter($__internal_ca2451233163e2f8fb0681129eeb6e6d11287c79faa329426c351af3ca2ffef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca2451233163e2f8fb0681129eeb6e6d11287c79faa329426c351af3ca2ffef0->leave($__internal_ca2451233163e2f8fb0681129eeb6e6d11287c79faa329426c351af3ca2ffef0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2765ef5446e73fc28590f71ca0b08b0c7f23ecb341d29fa7c2cfd9b1ab4f278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2765ef5446e73fc28590f71ca0b08b0c7f23ecb341d29fa7c2cfd9b1ab4f278->enter($__internal_d2765ef5446e73fc28590f71ca0b08b0c7f23ecb341d29fa7c2cfd9b1ab4f278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d2765ef5446e73fc28590f71ca0b08b0c7f23ecb341d29fa7c2cfd9b1ab4f278->leave($__internal_d2765ef5446e73fc28590f71ca0b08b0c7f23ecb341d29fa7c2cfd9b1ab4f278_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_28286a3dbf8f1151a44b4bca5c9956775862859dbf8f91c05732ea9f276cc172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28286a3dbf8f1151a44b4bca5c9956775862859dbf8f91c05732ea9f276cc172->enter($__internal_28286a3dbf8f1151a44b4bca5c9956775862859dbf8f91c05732ea9f276cc172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_28286a3dbf8f1151a44b4bca5c9956775862859dbf8f91c05732ea9f276cc172->leave($__internal_28286a3dbf8f1151a44b4bca5c9956775862859dbf8f91c05732ea9f276cc172_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_55df056aaaa9443c921ebece79520842bdef2faaf421c49657f0f9343b559c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55df056aaaa9443c921ebece79520842bdef2faaf421c49657f0f9343b559c45->enter($__internal_55df056aaaa9443c921ebece79520842bdef2faaf421c49657f0f9343b559c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_55df056aaaa9443c921ebece79520842bdef2faaf421c49657f0f9343b559c45->leave($__internal_55df056aaaa9443c921ebece79520842bdef2faaf421c49657f0f9343b559c45_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
