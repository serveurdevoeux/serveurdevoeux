<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_487c46ae1f0d3529ea513db55daa7698d7cd7d31ec97358b95d50f7af97f65b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4d10bb31c27658f82fda3685df684267cfbf8a1b6b17ab09e9c67f27b63f5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d10bb31c27658f82fda3685df684267cfbf8a1b6b17ab09e9c67f27b63f5f4->enter($__internal_a4d10bb31c27658f82fda3685df684267cfbf8a1b6b17ab09e9c67f27b63f5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4d10bb31c27658f82fda3685df684267cfbf8a1b6b17ab09e9c67f27b63f5f4->leave($__internal_a4d10bb31c27658f82fda3685df684267cfbf8a1b6b17ab09e9c67f27b63f5f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53027aa9ac1c3d89379eb59224153df830ff9e5a39aca1b3a66f8b363cdeadb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53027aa9ac1c3d89379eb59224153df830ff9e5a39aca1b3a66f8b363cdeadb5->enter($__internal_53027aa9ac1c3d89379eb59224153df830ff9e5a39aca1b3a66f8b363cdeadb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_53027aa9ac1c3d89379eb59224153df830ff9e5a39aca1b3a66f8b363cdeadb5->leave($__internal_53027aa9ac1c3d89379eb59224153df830ff9e5a39aca1b3a66f8b363cdeadb5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
