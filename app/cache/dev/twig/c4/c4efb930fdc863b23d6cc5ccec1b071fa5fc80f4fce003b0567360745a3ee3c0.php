<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_ee5722d7555b1dad044ca1fddbb0eb08855b283dbf0692b09c91c95d9bf46b4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_5f20140619cd2104189bef322abefa20949f3c6fb6b58b0b87f9858e6a302096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f20140619cd2104189bef322abefa20949f3c6fb6b58b0b87f9858e6a302096->enter($__internal_5f20140619cd2104189bef322abefa20949f3c6fb6b58b0b87f9858e6a302096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f20140619cd2104189bef322abefa20949f3c6fb6b58b0b87f9858e6a302096->leave($__internal_5f20140619cd2104189bef322abefa20949f3c6fb6b58b0b87f9858e6a302096_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_487eeecf0f2e8bc5d58b6f29dd23cc6817ca723397cee608a10e97688c91fc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487eeecf0f2e8bc5d58b6f29dd23cc6817ca723397cee608a10e97688c91fc61->enter($__internal_487eeecf0f2e8bc5d58b6f29dd23cc6817ca723397cee608a10e97688c91fc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_487eeecf0f2e8bc5d58b6f29dd23cc6817ca723397cee608a10e97688c91fc61->leave($__internal_487eeecf0f2e8bc5d58b6f29dd23cc6817ca723397cee608a10e97688c91fc61_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
