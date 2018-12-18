# blog
博客引用会用到的图片都放在这，可以自由引用，又能避免丢失。 

这里顺便研究学习了一下发布自己的composer包的过程。 

项目每次修改后提交后，打上版本号：

> git tag -a v1.0.1 -m 'ver1.0.1'

或者：

> git tag -a 1.0.2 -m 'ver1.0.2'

然后提交：

> git push origin --tags

然后在Packagist更新，就可以了。

不过需要等待一段时间（大概十几分钟后）才可以用。

可以查看本地有哪些版本：

> git tag

composer.json引入所需依赖：

```
    "require": {
        "pictree/blog": ">=1.0.1"
    },
```